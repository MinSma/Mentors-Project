@extends('layouts.main')
@section('title', 'Students Create')
@section('menu')
@endsection

@section('content')
    <div class="row">
        <div class="col-md-4"></div>

        <div class="col-md-4">
            <h1>Student Registration</h1>

            <hr>

            <form action="{{route('students.store')}}" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="first_name">First Name:</label>
                    <input type="text" class="form-control" id="first_name"  name="first_name" value="{{ old('first_name') }} required>
                </div>

                <div class="form-group">
                    <label for="last_name">Last Name:</label>
                    <input type="text" class="form-control" id="last_name"  name="last_name" value="{{ old('last_name') }} required>
                </div>

                <div class="form-group">
                    <label for="email">Email Address:</label>
                    <input type="email" class="form-control" id="email"  name="email" value="{{ old('email') }} required>
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
                        <option value="man"     @if (old('gender') == "man") {{ 'selected' }}       @endif>Man</option>
                        <option value="woman"   @if (old('gender') == "woman") {{ 'selected' }}       @endif>Woman</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="text" class="form-control" id="age"  name="age" value="{{ old('age') }}" required>
                </div>

                <div class="form-group">
                    <label for="city">City:</label>
                    <input type="text" class="form-control" id="city"  name="city" value="{{ old('city') }}" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
        </div>
    </div>
@endsection