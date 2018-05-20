@extends('layouts.main')
@section('menu')
    @include('layouts.NavPanel')
@endsection

@section('content')
    <form action="/mentors/found" method="GET" role="search">

        <div class="form-group">
            <label for="topic">Topic:</label>

            <select name="topic" id="topic" class="form-control">
                <option value="mathematics">Mathematics</option>
                <option value="english">English language</option>
                <option value="it">Information Technology</option>
                <option value="chemistry">Chemistry</option>
                <option value="physics">Physics</option>
                <option value="biology">Biology</option>
                <option value="geography">Geography</option>
                <option value="history">History</option>
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>
@endsection