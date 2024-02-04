<?php

namespace App\Http\Controllers;

use App\Models\Leader;
use Illuminate\Http\Request;

class RegistrationNonBinusianController extends Controller
{
    public function registrationNonBinusian() {
        return view('registNonBinusian');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'fullName' => 'required|string',
            'email' => 'required|email:dns|unique:leader',
            'waNumber' => 'required|numeric',
            'lineId' => 'required|string',
            'gitId' => 'required|string',
            'birthPlace' => 'required|string',
            'birthDate' => 'required',
            'cv' => 'required|mimes:pdf,jpg,jpeg,png|max:3000',
            'idCard' => 'required|mimes:pdf,jpg,jpeg,png|max:3000',
        ]);

        Leader::create($validatedData);

        return redirect('dashboard');
    }
}
