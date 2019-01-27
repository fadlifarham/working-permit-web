<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Location;
use App\Manager;
use App\JobSupervisor;
use App\SafetySupervisor;

class PagesController extends Controller
{
    public function showDashboard()
    {
        return view('pages.dashboard');
    }

    public function showWP()
    {
        return view('pages.workingpermit');
    }

    public function showLogin()
    {
        return view('pages.login');
    }

    public function showRegister()
    {
        return view('pages.register');
    }

    public function showIjinKerja()
    {
        $companies = Company::all();
        $locations = Location::all();
        $managers = Manager::all();
        $jobSupervisors = JobSupervisor::all();
        $safetySupervisors = SafetySupervisor::all();

        return view('pages.IjinKerja', compact(
            'companies', 
            'locations', 
            'managers', 
            'jobSupervisors', 
            'safetySupervisors'
        ));
    }
}
