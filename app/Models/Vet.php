<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vet extends Model
{
    /** @use HasFactory<\Database\Factories\VetFactory> */
    use HasFactory;

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    /**
    * Prescriptions can be given by vet
    */
    public function precriptions()
    {
        return $this->hasMany(Prescription::class);
    }
}
