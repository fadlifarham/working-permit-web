<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function showDashboard() {
        return view('pages.dashboard');
    }

    public function showWP() {
        return view('pages.workingpermit');
    }
}
