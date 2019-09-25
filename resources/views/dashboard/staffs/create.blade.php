@extends('layouts.dashboard')

@section('content')
    <h1>Create new Staff</h1>
    <hr>
    {!! Form::open(array('route' => 'staffs.store','method'=>'POST', 'files' => true)) !!}
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <label>First Name:</label>
                {!! Form::text('first_name', null, array('placeholder' => 'First Name','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>Last Name:</label>
                {!! Form::text('last_name', null, array('placeholder' => 'Last Name','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>Phone:</label>
                {!! Form::text('phone', null, array('placeholder' => 'Phone','class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-sm-6">
            <label>Job:</label>
            <div class="form-group">
                {{ Form::select('job_id', [0 => 'Select Job', $jobs], false, array('class' => 'form-control')) }}
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>Country:</label>
                {{ Form::select('country_id', [0 => 'Select Country', $countries], false, array('class' => 'form-control', 'id' => 'country')) }}
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group" id="city-wrapper" style="display: none;">
                <label>City:</label>
                {{ Form::select('city_id', [], false, array('class' => 'form-control', 'id' => 'city')) }}
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>Gender:</label>
                {!! Form::select('gender', [''=>'Select Gender', 'Male'=>'Male', 'Female'=>'Female'], false, array('class' => 'form-control')) !!}
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>{!! Form::radio('isActive' , 0, true) !!} Inactive</label>
                <label>{!! Form::radio('isActive', 1, false) !!} Active</label>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label>Image:</label>
                {!! Form::file('image', null, array('class' => 'form-control')) !!}
            </div>
        </div>
    </div>
    <div class="text-center">
        {!! Form::submit('Submit!', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@endsection

