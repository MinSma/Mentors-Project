@if(Auth::check())
    @if(Auth::guard('mentor')->user()['id'] != null)
        <li><a href="{{ route('mentors.dashboard') }}">Dashboard</a></li>
        <li><a href="/mentors/{{ Auth::guard('mentor')->user()['id'] }}/edit">Edit</a></li>
        <li><a href="{{ route('mentors.changePassword') }}">Change Password</a></li>
        <li><a href="{{ route('login.disconnect') }}">Logout</a></li>
    @elseif (Auth::guard('student')->user()['id'] != null)
        <li><a href="{{ route('students.dashboard') }}">Dashboard</a></li>
        <li><a href="/students/{{ Auth::guard('student')->user()['id'] }}/edit">Edit</a></li>
        <li><a href="{{ route('students.changePassword') }}">Change Password</a></li>
        <li><a href="{{ route('login.disconnect') }}">Logout</a></li>
    @elseif (Auth::guard('web')->user()['id'] != null)
        <li><a href="{{ route('users.dashboard') }}">Users Dashboard</a></li>
        <li><a href="/users/{{ Auth::guard('web')->user()['id'] }}/edit">Edit</a></li>
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Mentors <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="{{ route('mentors.index') }}">View All Mentors</a></li>
                <li><a href="{{ route('mentors.create') }}">Create a Mentor</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Students <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="{{ route('students.index') }}">View All Students</a></li>
                <li><a href="{{ route('students.create') }}">Create a Student</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">Users <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a href="{{ route('users.index') }}">View All Users</a></li>
                <li><a href="{{ route('users.create') }}">Create an User</a></li>
            </ul>
        </li>
        <li><a href="{{ route('users.changePassword') }}">Change Password</a></li>
        <li><a href="{{ route('login.disconnect') }}">Logout</a></li>
    @endif
@else
    <li><a href="{{ route('login') }}">Login</a></li>
@endif