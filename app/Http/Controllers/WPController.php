<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use App\Manager;
use App\Location;
use App\JobSupervisor;
use App\SafetySupervisor;
use App\WorkingPermit;
use PDF;

class WPController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'number' => 'required',
            'company_id' => 'required',
            'location_id' => 'required',
            'manager_id' => 'required',
            'job_supervisor_id' => 'required',
            'safety_supervisor_id' => 'required',
            'job_description' => 'required',
            'is_shutdown_required' => 'required',
            'is_grounding_required' => 'required',
            'required_isolating_point' => 'required',
            'safety_equipment_provided_by' => 'required'
        ]);

        $company = Company::findOrFail($request->input('company_id'));
        $location = Location::findOrFail($request->input('location_id'));
        $manager = Manager::findOrFail($request->input('manager_id'));
        $jobSupervisor = JobSupervisor::findOrFail($request->input('job_supervisor_id'));
        $safetySupervisor = SafetySupervisor::findOrFail($request->input('safety_supervisor_id'));

        $workingPermit = new WorkingPermit([
            'number' => $request->input('number'),
            'job_description' => $request->input('job_description'),
            'is_shutdown_required' => $request->input('is_shutdown_required'),
            'is_grounding_required' => $request->input('is_grounding_required'),
            'required_isolating_point' => $request->input('required_isolating_point'),
            'safety_equipment_provided_by' => $request->input('safety_equipment_provided_by')
        ]);

        $workingPermit->company()->associate($company);
        $workingPermit->location()->associate($location);
        $workingPermit->manager()->associate($manager);
        $workingPermit->jobSupervisor()->associate($jobSupervisor);
        $workingPermit->safetySupervisor()->associate($safetySupervisor);

        $workingPermit->save();

        $pdf = PDF::loadView('pages.PrintPDF', compact('workingPermit'));

        return $pdf->stream('Working-Permit.pdf');
    }
}
