<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    /** @use HasFactory<\Database\Factories\ConsultationFactory> */
    use HasFactory;

    /**
     * a consultation has one prescription
    */
    public function prescription()
    {
        return $this->hasOne(Prescription::class);
    }

    /**
     * a consultation belongs to an appointment
    */
    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }
}
