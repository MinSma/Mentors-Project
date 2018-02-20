@extends('layout.layout')

@section('content')
    <div class="row">
        <div class="col-md-4"></div>

        <div class="col-md-4">
            <h1>Admininistratoriaus Kurimas</h1>

            <hr>

            <form action="/students" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="first_name">Vartotojo vardas:</label>
                    <input type="text" class="form-control" id="first_name"  name="first_name" required>
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
                    <button type="submit" class="btn btn-primary">Sukurti</button>
                </div>
            </form>
        </div>
    </div>
@endsection