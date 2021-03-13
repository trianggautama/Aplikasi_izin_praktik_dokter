<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $data = User::whereNotIn('role', [7])->get();

        return view('admin.user.index');
    }

    public function store(Request $req)
    {
        $data = User::create($req->all());

        $biodata = $data->biodata_diri()->create($req->all());

        return back()->withSuccess('Data berhasil disimpan');
    }

    public function edit($id)
    {
        $data = User::findOrFail($id);

        return view('admin.user.edit', compact('data'));
    }

    public function update($id, Request $req)
    {
        $data = User::findOrFail($id);
        if ($req->password) {
            $data->fill($req->all())->save();
        } else {
            $data->fill($req->except('password'))->save();
        }

        $biodata = $data->biodata_diri->fill($req->all())->save();

        return redirect()->route('admin.user.index')->withSuccess('Data berhasil diubah');
    }

    public function destroy($id)
    {
        $data = User::findOrFail($id)->delete();

        return back()->withSuccess('Data berhasil dihapus');
    }
}
