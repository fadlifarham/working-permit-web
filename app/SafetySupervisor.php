<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SafetySupervisor extends Model
{
    protected $fillable = ['name'];

    public function workingPermits()
    {
        return $this->hasMany('App\WorkingPermit');
    }
}
