<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkingPermit extends Model
{
    protected $fillable = [
        'number', 
        'job_description', 
        'is_shutdown_required', 
        'is_grounding_required', 
        'required_isolating_point', 
        'safety_equipment_provided_by'
    ];

    public function company()
    {
        return $this->belongsTo('App\Company');
    }

    public function location()
    {
        return $this->belongsTo('App\Location');
    }

    public function manager()
    {
        return $this->belongsTo('App\Manager');
    }

    public function jobSupervisor()
    {
        return $this->belongsTo('App\JobSupervisor');
    }

    public function safetySupervisor()
    {
        return $this->belongsTo('App\SafetySupervisor');
    }
}
