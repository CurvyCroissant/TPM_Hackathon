<?php

namespace App\Http\Controllers;

use App\Models\Leader;
use Illuminate\Http\Request;

class RegistrationBinusianController extends Controller
{
    public function registrationBinusian() {
        return view('registBinusian');
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
            'flazzCard' => 'required|mimes:pdf,jpg,jpeg,png|max:3000'
        ]);


        $cvPath = $request->file('cv')->store('cv_files', 'public');
        $validatedData['cv'] = $cvPath;

        $flazzCardPath = $request->file('flazzCard')->store('flazz_card_files', 'public');
        $validatedData['flazzCard'] = $flazzCardPath;

        Leader::create($validatedData);

        // $path = $request->file('cv_image_input');

        // $member = Member::create([
        //     'cv_image_path'=>$path
        // ]);

        // $fileName = $member->id . $path->getClientOriginalName();
        // $cv->$cv_image_path = $path->storeAs ('public', $fileName);

        return redirect('dashboard', compact('request'));
    }
}

