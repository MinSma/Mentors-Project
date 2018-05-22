@extends('layouts.main')
@section('title', 'Users')
@section('menu')
    @include('layouts.NavPanel')
@endsection

@section('content')

    <h1>Mentoriaus Informacija</h1>

    <h3>Vardas:</h3><?php echo $mentor->first_name ?>
    <h3>Pavardė:</h3><?php echo $mentor->last_name ?>
    <h3>Elektroninio pašto adresas:</h3><?php echo $mentor->email ?>
    <h3>Lytis:</h3><?php echo $mentor->gender ?>
    <h3>Amžius:</h3><?php echo $mentor->age ?>
    <h3>Miestas:</h3><?php echo $mentor->city ?>
    <h3>Tema:</h3><?php echo $mentor->topic ?>
    <h3>Valandinis įkainis:</h3><?php echo $mentor->fixed_hour_price ?>

    <br />
    <br />


            <div class="row">
                <div class="col-xs-6 col-md-3">
                    <a class="btn btn-large btn-info" href="{{ route('reservation.store', $mentor) }}">Užsirašyti</a>
                </div>
            </div>


    <h2>Komentarai:</h2>
    @foreach($mentor->comments as $comment)
        <h3>{{$comment->body}} {{$comment->created_at->diffForHumans()}}</h3>
    @endforeach

            <div class="card">
                <div class="card-block">
                    <form method="POST" action="/mentors/{{ $mentor->id }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <textarea name="body" placeholder="Jūsų komentaras." class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Komentuoti</button>
                        </div>
                    </form>
                </div>
            </div>


@endsection