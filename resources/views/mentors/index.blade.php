
@section('title', 'Users')
@include('guestPagesLayouts.homeHeaderIncludes')

@include('layouts.NavPanel')
@include('guestPagesLayouts.homeHeaderSection')

    <h1>Visi Mentoriai</h1>

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

                <td>
                    <a class="btn btn-small btn-info pull-left" href="{{ URL::to('mentors/' . $value->id . '/edit') }}">Keisti Mentoriaus Duomenis</a>

                    {{ Form::open(array('url' => 'mentors/' . $value->id . '/delete', 'class' => 'pull-left')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Ištrinti Mentorių', array('class' => 'btn btn-danger')) }}
                    {{ Form::close() }}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $mentors->links() }}
