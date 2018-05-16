@extends('layouts.main')
@section('title', 'Mentors Create')
@section('menu')
@endsection

@section('content')
    <div class="row">
        <div class="col-md-4"></div>

        <div class="col-md-4">
            <h1>Mentors Registration</h1>

            <hr>

            <form action="{{route('mentors.store')}}" method="post">
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
                    <label for="email">Email Address:</label>
                    <input type="email" class="form-control" id="email"  name="email" required>
                </div>

                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Password Confirmation:</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                </div>

                <div class="form-group">
                    <label for="gender">Gender:</label>

                    <select name="gender" id="gender" class="form-control">
                        <option value="man">Man</option>
                        <option value="woman">Woman</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="number" class="form-control" id="age"  name="age" required>
                </div>

                <div class="form-group">
                    <label for="city">City:</label>
                    <input type="text" class="form-control" id="city"  name="city" required>
                </div>

                <div class="form-group">
                    <label for="topic">Topic:</label>

                    <select name="topic" id="topic" class="form-control">
                        <option value="mathematics">Mathematics</option>
                        <option value="english">English language</option>
                        <option value="it">Information Technology</option>
                        <option value="chemistry">Chemistry</option>
                        <option value="physics">Physics</option>
                        <option value="biology">Biology</option>
                        <option value="geography">Geography</option>
                        <option value="history">History</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="fixed_hour_price">Fixed hour price:</label>
                    <input type="text" class="form-control" id="fixed_hour_price"  name="fixed_hour_price" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection