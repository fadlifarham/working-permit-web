@extends('layout')

@section('title', 'Print | Working Permit')

@section('content')
    <div class="content-wrapper">
        <p>{{$number}}</p><br>
        <p>{{$job_description}}</p><br>
        <p>{{$is_shutdown_required}}</p><br>
        <p>{{$is_grounding_required}}</p><br>
        <p>{{$required_isolating_point}}</p><br>
        <p>{{$safety_equipment_provided_by}}</p><br>
        <p>{{$company}}</p><br>
        <p>{{$location}}</p><br>
        <p>{{$manager}}</p><br>
        <p>{{$jobSupervisor}}</p><br>
        <p>{{$safetySupervisor}}</p><br>
    </div>

@endsection