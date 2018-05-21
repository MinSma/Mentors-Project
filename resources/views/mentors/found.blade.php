@extends('layouts.main')
@section('menu')
    @include('layouts.NavPanel')
@endsection

@section('content')
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
            <td>Topic</td>
            <td>Fixed Hour Price</td>
            <td>Actions</td>

        </tr>
        </thead>
        <tbody>
        @foreach($mentors as $mentor)
            <tr>
                <td>{{ $mentor->id }}</td>
                <td>{{ $mentor->first_name }}</td>
                <td>{{ $mentor->last_name }}</td>
                <td>{{ $mentor->email }}</td>
                <td>{{ $mentor->gender }}</td>
                <td>{{ $mentor->age }}</td>
                <td>{{ $mentor->city }}</td>
                <td>{{ $mentor->topic }}</td>
                <td>{{ $mentor->fixed_hour_price }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $mentors->appends(Request::only('topic'))->links() }}
@endsection