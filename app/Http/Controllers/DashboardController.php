<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard() {
        return view('grDashboard');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'member1' => 'required',
            'member2' => 'required',
            'member3' => 'required',
            'member4' => 'required'
        ]);
        
        return redirect('dashboard');
    }
}
