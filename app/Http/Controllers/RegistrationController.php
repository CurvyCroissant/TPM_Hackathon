<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function registration() {
        return view('groupRegis');
    }

    public function createGroup(Request $request) {
        Group::create([
            'groupName' => $request -> group_name_input,
            'password' => $request -> password_input
        ]);

        return redirect('registration');
    }
}
