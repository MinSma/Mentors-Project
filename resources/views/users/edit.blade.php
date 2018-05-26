@extends('layouts.main')
@section('title', 'Admin Panel Edit')
@section('menu')
    @include('layouts.NavPanel')
@endsection


@section('content')
    {{ Form::model($user, array('route' => array('users.update', $user), 'method' => 'PUT')) }}

    <div class="form-group">
        {!! Form::label('name', 'Vardas', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Elektroninio Pašto Adresas:', ['class' => 'control-label']) !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::hidden('id', $user->id) !!}

    {!! Form::submit('Keisti', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@endsection