@extends('layouts.main')
@section('title', 'Students Panel Edit')
@section('menu')
    @include('layouts.userNavPanel')
@endsection


@section('content')
    {{ Form::model($mentor, array('route' => array('mentors.update', $mentor), 'method' => 'PUT')) }}

    <div class="form-group">
        {!! Form::label('first_name', 'First Name', ['class' => 'control-label']) !!}
        {!! Form::text('first_name', old('first_name'), ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('last_name', 'Last Name', ['class' => 'control-label']) !!}
        {!! Form::text('last_name', old('last_name'), ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('gender', 'Gender:', ['class' => 'control-label']) !!}
        {!! Form::select('gender', [
            'man' => 'Man',
            'woman' => 'Woman'
        ], old('topic'), ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('age', 'Age:', ['class' => 'control-label']) !!}
        {!! Form::text('age', old('age'), ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('city', 'City:', ['class' => 'control-label']) !!}
        {!! Form::text('city', old('city'), ['class' => 'form-control']) !!}
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
            'history' => 'History'
        ], old('topic'), ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('fixed_hour_price', 'Fixed Hour Price:', ['class' => 'control-label']) !!}
        {!! Form::text('fixed_hour_price', old('fixed_hour_price'), ['class' => 'form-control']) !!}
    </div>

    {!! Form::hidden('id', $mentor->id) !!}

    {!! Form::submit('Edit Mentor', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@endsection