<?php

namespace App\Http\Controllers;
use App\Models\Group;
use Illuminate\Http\Request;

class AdminPanelController extends Controller
{
    public function adminPanel() {
        return view('adminPanel');
    }
}
