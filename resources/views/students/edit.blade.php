@extends('layouts.main')
@section('title', 'Students Panel Edit')
@section('menu')
    @include('layouts.userNavPanel')
@endsection


@section('content')
    {{ Form::model($student, array('route' => array('students.update', $student), 'method' => 'PUT')) }}

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

    {!! Form::hidden('id', $student->id) !!}

    {!! Form::submit('Edit Student', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@endsection