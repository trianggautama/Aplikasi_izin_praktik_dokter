<?php

namespace App\Models;

use App\Models\Biodata_diri;
use App\Models\LampiranBidan;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PermohonanBidan extends Model
{
    protected $guarded = ['id'];

    /**
     * Get the lampiran_bidan associated with the PermohonanBidan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function lampiran_bidan(): HasOne
    {
        return $this->hasOne(LampiranBidan::class);
    }

    /**
     * Get the user that owns the PermohonanBidan
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function biodata_diri(): BelongsTo
    {
        return $this->belongsTo(Biodata_diri::class);
    }
}
