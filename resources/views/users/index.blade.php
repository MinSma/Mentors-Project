@extends('layouts.main')
@section('title', 'Users')
@section('menu')
    @include('layouts.userNavPanel')
@endsection

@section('content')

    <h1>All the users</h1>

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Email</td>
            <td>Actions</td>

        </tr>
        </thead>
        <tbody>
        @foreach($users as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->email }}</td>

                <td>
                    <a class="btn btn-small btn-info" href="{{ URL::to('users/' . $value->id . '/edit') }}">Edit this User</a>

                    {{ Form::open(array('url' => 'users/' . $value->id . '/delete', 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete this User', array('class' => 'btn btn-danger')) }}
                    {{ Form::close() }}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $users->links() }}
@endsection