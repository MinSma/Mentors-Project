@extends('layouts.main')
@section('title', 'Login Panel')
@section('menu')
    @include('layouts.userNavPanel')
@endsection
@section('content')
    user

    <div class="row">
        <div class="col-xs-6 col-md-4">
            <a class="btn btn-medium btn-info" href="{{ route('mentors.index') }}">Show Mentors</a>
            <a class="btn btn-large btn-warning" href="{{ route('mentors.create') }}">Create Mentor</a>
        </div>
        <div class="col-xs-12 col-md-5">
            <a class="btn btn-large btn-info" href="{{ route('students.index') }}">Show Students</a>
            <a class="btn btn-large btn-warning" href="{{ route('students.create') }}">Create Student</a>
        </div>
        <div class="col-xs-6 col-md-2">
            <a class="btn btn-large btn-info" href="{{ route('users.index') }}">Show Users</a>
            <a class="btn btn-large btn-warning" href="{{ route('users.create') }}">Create User</a>
        </div>
    </div>
    <div class="row form-group">
    </div>
    <div class="row">
        <div class="col-xs-6 col-md-4">
        </div>
        <div class="col-xs-12 col-md-5">
            <a class="btn btn-large btn-danger" href="{{ route('login.disconnect') }}">Logout</a>
        </div>
        <div class="col-xs-6 col-md-2">
        </div>
    </div>

    <form id="form-change-password" role="form" method="POST" action="{{ url('/users/dashboard') }}" novalidate class="form-horizontal">
        <div class="col-md-9">
            <label for="current-password" class="col-sm-4 control-label">Current Password</label>
            <div class="col-sm-8">
                <div class="form-group">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="password" class="form-control" id="current-password" name="current-password" placeholder="Password">
                </div>
            </div>
            <label for="password" class="col-sm-4 control-label">New Password</label>
            <div class="col-sm-8">
                <div class="form-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
            </div>
            <label for="password_confirmation" class="col-sm-4 control-label">Re-enter Password</label>
            <div class="col-sm-8">
                <div class="form-group">
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Re-enter Password">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-5 col-sm-6">
                <button type="submit" class="btn btn-danger">Submit</button>
            </div>
        </div>
    </form>
@endsection