@extends('layout.layout')

@section('content')
    <h1>Mentor registration</h1>

    <hr>

    <form action="/mentors" method="post">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="first_name">Vardas</label>
            <input type="text" class="form-control" id="first_name"  name="first_name" required>
        </div>

        <div class="form-group">
            <label for="last_name">Pavarde</label>
            <input type="text" class="form-control" id="last_name"  name="last_name" required>
        </div>

        <div class="form-group">
            <label for="email">El. Pasto Adresas</label>
            <input type="email" class="form-control" id="email"  name="email" required>
        </div>

        <div class="form-group">
            <label for="gender">Lytis</label>

            <select name="gender" id="gender" class="form-control">
                <option value="0">Vyras</option>
                <option value="1">Moteris</option>
            </select>
        </div>

        <div class="form-group">
            <label for="age">Amzius</label>
            <input type="text" class="form-control" id="age"  name="age" required>
        </div>

        <div class="form-group">
            <label for="city">Miestas</label>
            <input type="text" class="form-control" id="city"  name="city" required>
        </div>

        <div class="form-group">
            <label for="topic">Mokomasis dalykas</label>

            <select name="topic" id="topic" class="form-control">
                <option value="0"></option>
                <option value="1">Matematika</option>
                <option value="2">Lietuviu kalba</option>
                <option value="3">Anglu kalba</option>
                <option value="4">Informacines Technologijos</option>
                <option value="5">Chemija</option>
                <option value="6">Fizika</option>
                <option value="7">Biologija</option>
                <option value="8">Geografija</option>
                <option value="9">Istorija</option>
            </select>
        </div>

        <div class="form-group">
            <label for="fixed_hour_price">Valandine kaina</label>
            <input type="text" class="form-control" id="fixed_hour_price"  name="fixed_hour_price" required>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Registruotis</button>
        </div>
    </form>
@endsection