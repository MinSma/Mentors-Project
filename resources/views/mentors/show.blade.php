@extends('layouts.main')
@section('title', 'Users')
@section('menu')
    @include('layouts.mentorNavPanel')
@endsection

@section('content')

    <h1>Mentor's information</h1>

    <h3>First name:</h3><?php echo $mentor->first_name ?>
    <h3>Last name:</h3><?php echo $mentor->last_name ?>
    <h3>Email address:</h3><?php echo $mentor->email ?>
    <h3>Gender:</h3><?php echo $mentor->gender ?>
    <h3>Age:</h3><?php echo $mentor->age ?>
    <h3>City:</h3><?php echo $mentor->city ?>
    <h3>Topic:</h3><?php echo $mentor->topic ?>
    <h3>Fixed hour price:</h3><?php echo $mentor->fixed_hour_price ?>

    <br />
    <br />

    <div class="row">
        <div class="col-xs-6 col-md-3">
            <a class="btn btn-large btn-info" href="{{ route('reservation.store', $mentor) }}">Register</a>
        </div>
    </div>

@endsection