<li><a href="{{ route('users.dashboard') }}">Users Dashboard</a></li>
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