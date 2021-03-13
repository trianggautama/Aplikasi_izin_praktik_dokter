<?php

namespace App\Models;

use App\Models\Biodata_diri;
use App\Models\Lampiran;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Permohonan_SIP extends Model
{
    use HasFactory;

    protected $guarded = [''];

    /**
     * Get the biodata_dir that owns the Permohonan_SIP
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function biodata_diri(): BelongsTo
    {
        return $this->belongsTo(Biodata_diri::class);
    }

    /**
     * Get the lampiran associated with the Permohonan_SIP
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function lampiran(): HasOne
    {
        return $this->hasOne(Lampiran::class);
    }
}
