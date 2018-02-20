@extends('layout.layout')

@section('content')
    <div class="row">
        <div class="col-md-4"></div>

        <div class="col-md-4">
            <h1>Admin Creation</h1>

            <hr>

            <form action="/mentors" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="first_name">First Name:</label>
                    <input type="text" class="form-control" id="first_name"  name="first_name" required>
                </div>

                <div class="form-group">
                    <label for="last_name">Last Name:</label>
                    <input type="text" class="form-control" id="last_name"  name="last_name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email Adresas:</label>
                    <input type="email" class="form-control" id="email"  name="email" required>
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Password:</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                </div>

                <div class="form-group">
                    <label for="password">Password Confirmation:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>
@endsection