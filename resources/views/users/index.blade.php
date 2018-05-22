@extends('layouts.main')
@section('title', 'Users')
@section('menu')
    @include('layouts.NavPanel')
@endsection

@section('content')

    <h1>All the users</h1>

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>Vardas</td>
            <td>Elektorinio Pašto Adresas</td>
            <td>Veiksmai</td>

        </tr>
        </thead>
        <tbody>
        @foreach($users as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->name }}</td>
                <td>{{ $value->email }}</td>

                <td>
                    <a class="btn btn-small btn-info" href="{{ URL::to('users/' . $value->id . '/edit') }}">Keisti Administratoriaus Duomenis</a>

                    {{ Form::open(array('url' => 'users/' . $value->id . '/delete', 'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Trinti Šį Administratorių', array('class' => 'btn btn-danger')) }}
                    {{ Form::close() }}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $users->links() }}
@endsection