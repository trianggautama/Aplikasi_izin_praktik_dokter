<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            'nama' => 'admin',
            'username' => 'admin',
            'password' => Hash::make('123'),
            'role' => '1',
        ]);

        DB::table('biodata_diris')->insert([
            'user_id' => '1',
            'NIP' => '123',
            'alamat' => 'banjarbaru',
            'tempat_lahir' => 'banjarbaru',
            'tanggal_lahir' => '1998-05-06',
            'jenis_kelamin' => '1',
        ]);
    }
}
