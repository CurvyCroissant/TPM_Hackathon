<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class RegistrationNonBinusianController extends Controller
{
    public function registrationNonBinusian() {
        return view('registNonBinusian');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'fullName' => 'required',
            'email' => 'required|email:dns|unique:users',
            'waNumber' => 'required|numeric',
            'lineId' => 'required',
            'gitId' => 'required',
            'birthPlace' => 'required',
            'birthDate' => 'required',
            'cv' => 'required|mimes:pdf,jpg,jpeg,png|max:3000',
            'idCard' => 'required|mimes:pdf,jpg,jpeg,png|max:3000',
        ]);

        
    }
}
