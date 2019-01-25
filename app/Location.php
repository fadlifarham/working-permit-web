<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $fillable = ['name'];

    public function workingPermits()
    {
        return $this->hasMany('App\WorkingPermit');
    }
}
