@extends('layouts.main')
@section('title', 'Students Panel Edit')
@section('menu')
    @include('layouts.NavPanel')
@endsection


@section('content')
    {{ Form::model($student, array('route' => array('students.update', $student), 'method' => 'PUT')) }}

    <div class="form-group">
        {!! Form::label('first_name', 'Vardas', ['class' => 'control-label']) !!}
        {!! Form::text('first_name', old('first_name'), ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('last_name', 'Pavardė', ['class' => 'control-label']) !!}
        {!! Form::text('last_name', old('last_name'), ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('gender', 'Lytis:', ['class' => 'control-label']) !!}
        {!! Form::select('gender', [
            'vyras' => 'Vyras',
            'moteris' => 'Moteris'
        ], old('topic'), ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('age', 'Amžius:', ['class' => 'control-label']) !!}
        {!! Form::text('age', old('age'), ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('city', 'Miestas:', ['class' => 'control-label']) !!}
        {!! Form::text('city', old('city'), ['class' => 'form-control']) !!}
    </div>

    {!! Form::hidden('id', $student->id) !!}

    {!! Form::submit('Keisti Studento Duomenis', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@endsection