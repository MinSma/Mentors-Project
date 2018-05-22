@extends('layouts.main')
@section('title', 'Login Panel')
@section('menu')
    @include('layouts.NavPanel')
@endsection
@section('content')
    <form id="form-change-password" role="form" method="POST" action="{{ url('/mentors/dashboard/change') }}" novalidate class="form-horizontal">
        <div class="col-md-9">
            <label for="current-password" class="col-sm-4 control-label">Esamas Slaptažodis</label>
            <div class="col-sm-8">
                <div class="form-group">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="password" class="form-control" id="current-password" name="current-password" placeholder="Slaptažodis">
                </div>
            </div>
            <label for="password" class="col-sm-4 control-label">Naujas Slaptažodis</label>
            <div class="col-sm-8">
                <div class="form-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Slaptažodis">
                </div>
            </div>
            <label for="password_confirmation" class="col-sm-4 control-label">Naujo Slaptažodio Patvirtinimas</label>
            <div class="col-sm-8">
                <div class="form-group">
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Slaptažodio Patvirtinimas">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-5 col-sm-6">
                <button type="submit" class="btn btn-danger">Keisti</button>
            </div>
        </div>
    </form>
@endsection