@extends('layouts.main')
@section('title', 'Login Panel')
@section('menu')
    @include('layouts.NavPanel')
@endsection
@section('content')
    user

    <div class="row">
        <div class="col-xs-6 col-md-4">
            <a class="btn btn-medium btn-info" href="{{ route('mentors.index') }}">Rodyti Mentorius</a>
            <a class="btn btn-large btn-warning" href="{{ route('mentors.create') }}">Kurti Mentorių</a>
        </div>
        <div class="col-xs-12 col-md-5">
            <a class="btn btn-large btn-info" href="{{ route('students.index') }}">Rodyti Studentus</a>
            <a class="btn btn-large btn-warning" href="{{ route('students.create') }}">Kurit Studentą</a>
        </div>
        <div class="col-xs-6 col-md-2">
            <a class="btn btn-large btn-info" href="{{ route('users.index') }}">Rodyti Administratorius</a>
            <a class="btn btn-large btn-warning" href="{{ route('users.create') }}">Kurti Administratorių</a>
        </div>
    </div>
    <div class="row form-group">
    </div>
    <div class="row">
        <div class="col-xs-6 col-md-4">
        </div>
        <div class="col-xs-12 col-md-5">
            <a class="btn btn-large btn-danger" href="{{ route('login.disconnect') }}">Atsijungti</a>
        </div>
        <div class="col-xs-6 col-md-2">
        </div>
    </div>
@endsection