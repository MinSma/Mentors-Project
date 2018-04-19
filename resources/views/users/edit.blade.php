@extends('layouts.main')
@section('title', 'Admin Panel Edit')
@section('menu')
    @include('layouts.userNavPanel')
@endsection


@section('content')
    {{ Form::model($user, array('route' => array('users.update', $user), 'method' => 'PUT')) }}

    <div class="form-group">
        {!! Form::label('name', 'Name', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email:', ['class' => 'control-label']) !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Password:', ['class' => 'control-label']) !!}
        {!! Form::password('password',  null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::hidden('id', $user->id) !!}



    {!! Form::submit('Edit User', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

@endsection