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

    public function showLogin() {
        return view('pages.login');
    }

    public function showRegister() {
        return view('pages.register');
    }

    public function showIjinKerja() {
        return view('pages.IjinKerja');
    }
}
