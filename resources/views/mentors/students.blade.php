@extends('layouts.main')
@section('title', 'Login Panel')
@section('menu')
    @include('layouts.NavPanel')
@endsection
@section('content')
    <h2>Students with belongs to you:</h2>

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>Email</td>
            <td>Gender</td>
            <td>Age</td>
            <td>City</td>
        </tr>
        </thead>
        <tbody>
        @foreach($mentor->students as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->first_name }}</td>
                <td>{{ $value->last_name }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->gender }}</td>
                <td>{{ $value->age }}</td>
                <td>{{ $value->city }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection