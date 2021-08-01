<?php

namespace App\Models;

use App\Models\Biodata_diri;
use App\Models\LampiranFarmasi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PermohonanFarmasi extends Model
{
    protected $guarded = [''];

    /**
     * Get the lampiran_farmasi associated with the PermohonanFarmasi
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function lampiran_farmasi(): HasOne
    {
        return $this->hasOne(LampiranFarmasi::class);
    }
    public function biodata_diri(): BelongsTo
    {
        return $this->belongsTo(Biodata_diri::class);
    }
}
