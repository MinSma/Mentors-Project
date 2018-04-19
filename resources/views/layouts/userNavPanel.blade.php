<li><a href="{{ URL::to('dashboard') }}">Dashboard</a></li>
<li class="dropdown">
    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Admins <b class="caret"></b></a>
    <ul class="dropdown-menu">
        <li><a href="{{ URL::to('users/index') }}">View All Admins</a></li>
        <li><a href="{{ URL::to('users/create') }}">Create an User</a></li>
    </ul>
</li>
<li class="dropdown">
    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Employees <b class="caret"></b></a>
    <ul class="dropdown-menu">
        <li><a href="{{ URL::to('employees/index') }}">View All Employees</a></li>
        <li><a href="{{ URL::to('employees/create') }}">Create an Employee</a></li>
    </ul>
</li>
<li class="dropdown">
    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Events <b class="caret"></b></a>
    <ul class="dropdown-menu">
        <li><a href="{{ URL::to('events/index') }}">View All Events</a></li>
        <li><a href="{{ URL::to('events/create') }}">Create an Event</a></li>
    </ul>
</li>
<li><a href="{{ route('login.disconnect') }}">Logout</a></li>