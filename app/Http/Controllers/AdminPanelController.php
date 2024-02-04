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

    public function deleteGroup($id1) {
        Group::findOrFail($id1)->delete();

        return redirect('admin-panel');
    }

}
