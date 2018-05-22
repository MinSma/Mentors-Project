@if(Auth::check())
    @if(Auth::guard('mentor')->user()['id'] != null)
        <li><a href="{{ route('mentors.dashboard') }}">Vartotojo Erdvė</a></li>
        <li><a href="/mentors/{{ Auth::guard('mentor')->user()['id'] }}/edit">Duomenų Keitimas</a></li>
        <li><a href="{{ route('mentors.changePassword') }}">Slaptažodžio Keitimas</a></li>
        <li><a href="{{ route('login.disconnect') }}">Atsijungti</a></li>
    @elseif (Auth::guard('student')->user()['id'] != null)
        <li><a href="{{ route('students.dashboard') }}">Vartotojo Erdvė</a></li>
        <li><a href="/students/{{ Auth::guard('student')->user()['id'] }}/edit">Duomenų Keitimas</a></li>
        <li><a href="{{ route('students.changePassword') }}">Slaptažodžio Keitimas</a></li>
        <li><a href="{{ route('login.disconnect') }}">Atsijungti</a></li>
    @elseif (Auth::guard('web')->user()['id'] != null)
        <li><a href="{{ route('users.dashboard') }}">Vartotojo Erdvė</a></li>
        <li><a href="/users/{{ Auth::guard('web')->user()['id'] }}/edit">Duomenų Keitimas</a></li>
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Mentoriai <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="{{ route('mentors.index') }}">Peržiūrėti Mentorius</a></li>
                <li><a href="{{ route('mentors.create') }}">Sukurti Mentorių</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Studentai <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="{{ route('students.index') }}">Peržiūrėti Studentus</a></li>
                <li><a href="{{ route('students.create') }}">Sukurti Studentą</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Administratoriai <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="{{ route('users.index') }}">Peržiūrėti Administratorius</a></li>
                <li><a href="{{ route('users.create') }}">Sukurti Administratorių</a></li>
            </ul>
        </li>
        <li><a href="{{ route('users.changePassword') }}">Slaptažodžio Keitimas</a></li>
        <li><a href="{{ route('login.disconnect') }}">Atsijungti</a></li>
    @endif
@else
    <li><a href="{{ route('login') }}">Prisijungti</a></li>
@endif