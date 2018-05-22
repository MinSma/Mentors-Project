@extends('layouts.main')
@section('title', 'Login Panel')
@section('content')
    <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Prašome Prisijungti</h3>
                </div>
                <div class="panel-body">
                    <form action="{{route('login.connect')}}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="email">Elektroninio Pašto Adresas:</label>
                            <input type="email" class="form-control" id="email"  name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="password">Slaptažodis:</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>

                        <div class="row">
                            <div class="col-xs-6 col-md-5">
                                    <button type="submit" class="btn btn-primary">Prisijungti</button>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a class="btn btn-medium btn-info" href="{{ route('mentors.create') }}">Registruoti Mentorių</a>
                            </div>
                            <div class="col-xs-6 col-md-3">
                                <a class="btn btn-large btn-info" href="{{ route('students.create') }}">Registruoti Studentą</a>
                            </div>
                        </div>
                    </form>

            </div>
        </div>
    </div>


@endsection