<?php

namespace App\Http\Controllers;
use App\Models\Group;
use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    public function adminPanel() {
        $list_group = Group::all();

        return view('adminPanel',[
            "list_group" => $list_group
        ]);
    }

    public function delete($id) {
        Group::findOrFail($id)->delete();

        return redirect('admin-panel');
    }

    public function edit($id) {
        return view('editGroup',[
            "group" => $group
        ]);
    }

    public function update(Request $request, $id) {
        $validatedData = $request->validate([
            'groupName' => 'required|string|max:30',
            'password' => 'required|min:5|max:20'
        ]);

        Group::findOrFail($id)->update($validatedData);

        return redirect('admin-panel');
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'groupName' => 'required|string|max:30',
            'password' => 'required|min:5|max:20'
        ]);

        Group::create($validatedData);

        return redirect('admin-panel');
    }

    public function display($id) {
        $group = Group::findOrFail($id);

        return view('displayGroup',[
            "group" => $group
        ]);
    }
}
