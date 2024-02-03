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
        Member::create([
            'fullname' => $request -> fullname_input,
            'email' => $request -> email_input,
            'waNumber' => $request -> waNumber_input,
            'lineId' => $request -> lineId_input,
            'gitId' => $request -> gitId_input,
            'birthPlace' => $request -> birthPlace_input,
            'birthDate' => $request -> birthDate_input,
            'cv' => $request -> cv_input,
            'flazzCard' => $request -> flazzcard_input,
        ]);

        return redirect('dashboard');
    }
}

