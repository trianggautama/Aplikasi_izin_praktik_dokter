<?php

namespace App\Models;

use App\Models\Permohonan_SIP;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pemohonan_surat_rekomendasi extends Model
{
    protected $guarded = [];

    /**
     * Get the permohonan_sip that owns the Pemohonan_surat_rekomendasi
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function permohonan_sip(): BelongsTo
    {
        return $this->belongsTo(Permohonan_SIP::class);
    }
}
