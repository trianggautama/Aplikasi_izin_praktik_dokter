<?php

namespace App\Models;

use App\Models\Surat_kuasa;
use Illuminate\Database\Eloquent\Model;

class Surat_kuasa_praktek extends Model
{
    protected $guarded = [''];

    /**
     * Get the surat_kuasa that owns the Surat_kuasa_praktek
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function surat_kuasa(): BelongsTo
    {
        return $this->belongsTo(Surat_kuasa::class);
    }
}
