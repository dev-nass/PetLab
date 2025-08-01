<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    /** @use HasFactory<\Database\Factories\PrescriptionFactory> */
    use HasFactory;

    /**
     * a prescription belongs to a consultation
    */
    public function consultation()
    {
        return $this->belongsTo(Consultation::class);
    }
}
