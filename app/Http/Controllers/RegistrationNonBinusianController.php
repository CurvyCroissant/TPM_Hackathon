<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class RegistrationNonBinusianController extends Controller
{
    public function registrationNonBinusian() {
        return view('registNonBinusian');
    }

    public function createLeaderNonBinusian(Request $request) {
        Member::create([
            'fullname' => $request -> fullname_input,
            'email' => $request -> email_input,
            'waNumber' => $request -> waNumber_input,
            'lineId' => $request -> lineId_input,
            'gitId' => $request -> gitId_input,
            'birthPlace' => $request -> birthPlace_input,
            'birthDate' => $request -> birthDate_input
        ]);

        return redirect('dashboard');
    }
}
