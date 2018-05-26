@extends('layouts.main')
@section('menu')
    @include('layouts.NavPanel')
@endsection

@section('content')
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>Vardas</td>
            <td>Pavardė</td>
            <td>Elektroninio pašto adresas</td>
            <td>Lytis</td>
            <td>Amžius</td>
            <td>Miestas</td>
            <td>Tema</td>
            <td>Valandinis įkainis</td>
            <td>Veiksmai</td>
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
                <td>
                    <a class="btn btn-small btn-info" href="{{ URL::to('mentors/' . $mentor->id ) }}">Profilis</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $mentors->appends(Request::only('topic'))->links() }}
@endsection