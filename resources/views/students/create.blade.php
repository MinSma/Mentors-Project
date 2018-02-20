@extends('layout.layout')

@section('content')
    <div class="row">
        <div class="col-md-4"></div>

        <div class="col-md-4">
            <h1>Studentu Registracija</h1>

            <hr>

            <form action="/students" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="first_name">Vardas:</label>
                    <input type="text" class="form-control" id="first_name"  name="first_name" required>
                </div>

                <div class="form-group">
                    <label for="last_name">Pavarde:</label>
                    <input type="text" class="form-control" id="last_name"  name="last_name" required>
                </div>

                <div class="form-group">
                    <label for="email">El. Pasto Adresas:</label>
                    <input type="email" class="form-control" id="email"  name="email" required>
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Slaptazodis:</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                </div>

                <div class="form-group">
                    <label for="password">Slaptazodzio Patvirtinimas:</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <div class="form-group">
                    <label for="gender">Lytis:</label>

                    <select name="gender" id="gender" class="form-control">
                        <option value="0">Vyras</option>
                        <option value="1">Moteris</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="age">Amzius:</label>
                    <input type="text" class="form-control" id="age"  name="age" required>
                </div>

                <div class="form-group">
                    <label for="city">Miestas:</label>
                    <input type="text" class="form-control" id="city"  name="city" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Registruotis</button>
                </div>
            </form>
        </div>
    </div>
@endsection