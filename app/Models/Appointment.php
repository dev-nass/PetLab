<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    /** @use HasFactory<\Database\Factories\AppointmentFactory> */
    use HasFactory;

    /**
     * an appointment has one consultation, if its confirmed
    */
    public function consultation()
    {
        return $this->hasOne(Consultation::class);
    }

    /**
     * an appointment belongs to a user (pet parent)
    */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

     /**
     * an appointment belongs to a pet
    */
    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }

    /**
     * an appointment belongs to a vet (selected by pet parent)
    */
    public function vet()
    {
        return $this->belongsTo(Vet::class);
    }
}
