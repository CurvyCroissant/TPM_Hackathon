<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Members;

class DashboardController extends Controller
{
    public function dashboard() {
        return view('grDashboard');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'member1' => 'required|string',
            'member2' => 'required|string',
            'member3' => 'required|string',
            'member4' => 'required|string'
        ]);
        
        Members::create($validatedData);

        return redirect('dashboard');
    }

    public function display($id) {
        $member = Members::findOrFail($id);

        return view('displayGroup',[
            "member" => $member
        ]);
    }

    public function edit($id) {
        $member = Members::findOrFail($id);

        return view('editGroup',[
            "member" => $member
        ]);
    }

    public function update(Request $request, $id) {
        $validatedData = $request->validate([
            'member1' => 'required|string',
            'member2' => 'required|string',
            'member3' => 'required|string',
            'member4' => 'required|string'
        ]);

        Members::findOrFail($id)->update($validatedData);

        return redirect('dashboard');
    }
}
