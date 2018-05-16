@extends('layouts.main')
@section('title', 'Users')
@section('menu')
    @include('layouts.userNavPanel')
@endsection

@section('content')

    <h1>All the students</h1>

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
            <td>Actions</td>

        </tr>
        </thead>
        <tbody>
        @foreach($students as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->first_name }}</td>
                <td>{{ $value->last_name }}</td>
                <td>{{ $value->email }}</td>
                <td>{{ $value->gender }}</td>
                <td>{{ $value->age }}</td>
                <td>{{ $value->city }}</td>

                <td>
                    <a class="btn btn-small btn-info" href="{{ URL::to('students/' . $value->id . '/edit') }}">Edit this Student</a>

                    {{ Form::open(array('url' => 'students/' . $value->id . '/delete', 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete this Student', array('class' => 'btn btn-danger')) }}
                    {{ Form::close() }}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $students->links() }}
@endsection