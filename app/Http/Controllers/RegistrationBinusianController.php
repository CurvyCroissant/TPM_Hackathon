<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class RegistrationBinusianController extends Controller
{
    public function registrationBinusian() {
        return view('registBinusian');
    }

    public function createLeaderBinusian(Request $request) {
        $validatedData = $request->validate([
            'fullName' => 'required',
            'email' => 'required|email:dns|unique:users',
            'waNumber' => 'required|numeric',
            'lineId' => 'required',
            'gitId' => 'required',
            'birthPlace' => 'required',
            'birthDate' => 'required',
            'cv' => 'required|mimes:pdf,jpg,jpeg,png|max:3000',
            'flazzCard' => 'required|mimes:pdf,jpg,jpeg,png|max:3000',
        ]);

        return redirect('dashboard');
    }
}

