<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkingPermitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('working_permits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('number');
            $table->integer('company_id')->unsigned();
            $table->integer('location_id')->unsigned(); 
            $table->integer('manager_id')->unsigned(); 
            $table->integer('job_supervisor_id')->unsigned(); 
            $table->integer('safety_supervisor_id')->unsigned(); 
            $table->string('job_description');
            $table->boolean('is_shutdown_required');
            $table->boolean('is_grounding_required');
            $table->string('required_isolating_point');
            $table->string('safety_equipment_provided_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('working_permit');
    }
}
