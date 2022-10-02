<nav class="navbar navbar-expand-md" role="navigation">
    <a class="navbar-brand img-responsive" href="Main">
        <img src="{{ asset('img/logo.png') }}">
    </a>
    <button class="navbar-toggler navbar-dark bg-dark collapsedark" type="button" data-toggle="collapse" data-target="#navbarid" aria-expanded="false">
        <span class="navbar-toggler-icon "></span>
    </button>

    <div class="collapse navbar-collapse collapsedark2" id="navbarid" role="menu">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('department') }}">Departments</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="collapse" aria-expanded="false" href="#sch">School Crew</a>
                <div class="dropdown-menu" id="sch" role="menu">
                    <a class="dropdown-item" href="{{ url('headmaster') }}">Headmaster</a>
                    <a class="dropdown-item" href="{{ url('professors') }}">Professors</a>
                    <a class="dropdown-item" href="{{ url('students') }}">Students</a>
                    <a class="dropdown-item" href="{{ url('others') }}">Others</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="collapse" aria-expanded="false" href="#sup">Supplies</a>
                <div class="dropdown-menu" id="sup" role="menu">
                    <a class="dropdown-item" href="{{ url('for classes') }}">For Classes</a>
                    <a class="dropdown-item" href="{{ url('for quidditch') }}">For Quidditch</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('uniform') }}">Uniforms</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('admin login') }}">Admin_Login</a>
            </li>
        </ul>
    </div>
</nav>


