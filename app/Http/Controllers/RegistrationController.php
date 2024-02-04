<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function registration() {
        return view('groupRegis');
    }
    
    public function store(Request $request) {
        $validatedData = $request->validate([
            'groupName' => 'required',
            'password' => 'required|min:5|max:20'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        Group::create($validatedData);
        
        return redirect('registration');
    }
}
