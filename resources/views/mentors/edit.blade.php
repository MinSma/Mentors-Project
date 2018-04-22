@extends('layouts.main')
@section('title', 'Students Panel Edit')
@section('menu')
    @include('layouts.userNavPanel')
@endsection


@section('content')
    {{ Form::model($mentor, array('route' => array('mentors.update', $mentor), 'method' => 'PUT')) }}

    <div class="form-group">
        {!! Form::label('first_name', 'First Name', ['class' => 'control-label']) !!}
        {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('last_name', 'Last Name', ['class' => 'control-label']) !!}
        {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('gender', 'Gender:', ['class' => 'control-label']) !!}
        {!! Form::text('gender', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('age', 'Age:', ['class' => 'control-label']) !!}
        {!! Form::text('age', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('city', 'City:', ['class' => 'control-label']) !!}
        {!! Form::text('city', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('topic', 'Topic:', ['class' => 'control-label']) !!}
        {!! Form::select('topic', [
        'mathematics' => 'Mathematics',
        'english' => 'English language',
        'it' => 'Information Technology',
        'chemistry' => 'Chemistry',
        'physics' => 'Physics',
        'biology' => 'Biology',
        'geography' => 'Geography',
        'history' => 'History',
        ], null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('fixed_hour_price', 'Fixed Hour Price:', ['class' => 'control-label']) !!}
        {!! Form::text('fixed_hour_price', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Password:', ['class' => 'control-label']) !!}
        {!! Form::password('password',  null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::hidden('id', $mentor->id) !!}



    {!! Form::submit('Edit Mentor', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@endsection