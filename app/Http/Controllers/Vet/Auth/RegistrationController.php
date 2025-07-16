<?php

namespace App\Http\Controllers\Vet\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    // VetRegistrationController

    public function create()
    {
        return view('vets.auth.registration');
    }
}
