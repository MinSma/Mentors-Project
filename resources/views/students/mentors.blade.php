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
        </tr>
        </thead>
        @if($student->mentor != NULL)
            <tbody>
                <tr>
                    <td>{{ $student->mentor->id }}</td>
                    <td>{{ $student->mentor->first_name }}</td>
                    <td>{{ $student->mentor->last_name }}</td>
                    <td>{{ $student->mentor->email }}</td>
                    <td>{{ $student->mentor->gender }}</td>
                    <td>{{ $student->mentor->age }}</td>
                    <td>{{ $student->mentor->city }}</td>
                </tr>
            </tbody>
        @endif
    </table>
@endsection