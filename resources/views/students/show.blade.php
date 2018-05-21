@extends('layouts.main')
@section('title', 'Users')
@section('menu')
    @include('layouts.NavPanel')
@endsection

@section('content')

    <h1>Student's information</h1>

    <h3>First name:</h3><?php echo $student->first_name ?>
    <h3>Last name:</h3><?php echo $student->last_name ?>
    <h3>Email address:</h3><?php echo $student->email ?>
    <h3>Gender:</h3><?php echo $student->gender ?>
    <h3>Age:</h3><?php echo $student->age ?>
    <h3>City:</h3><?php echo $student->city ?>

@endsection