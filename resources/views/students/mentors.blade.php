@extends('layouts.main')
@section('title', 'Login Panel')
@section('menu')
    @include('layouts.NavPanel')
@endsection
@section('content')
    <h2>Mentoriai, kuriems priklausote:</h2>

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
        </tr>
        </thead>
        @if($mentors != NULL)
            <tbody>
                @foreach($mentors as $key => $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->first_name }}</td>
                        <td>{{ $value->last_name }}</td>
                        <td>{{ $value->email }}</td>
                        <td>{{ $value->gender }}</td>
                        <td>{{ $value->age }}</td>
                        <td>{{ $value->city }}</td>
                        <td>{{ $value->topic }}</td>
                        <td>{{ $value->fixed_hour_price }}</td>
                    </tr>
                @endforeach
            </tbody>
        @endif
    </table>
@endsection