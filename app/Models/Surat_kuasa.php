<?php

namespace App\Models;

use App\Models\Surat_kuasa_praktek;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Surat_kuasa extends Model
{
    protected $guarded = [''];
/**
 * Get the surat_kuasa_praktek associated with the Surat_kuasa
 *
 * @return \Illuminate\Database\Eloquent\Relations\HasOne
 */
    public function surat_kuasa_praktek(): HasOne
    {
        return $this->hasOne(Surat_kuasa_praktek::class);
    }
}
