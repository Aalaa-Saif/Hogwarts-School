<!DOCTYPE html>
<head>
    <title>Hogwarts School</title>
    <link href="{{ asset('css/dashboardCss.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="nofollow" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="{{ asset('js/dashboardJS.js') }}"></script>
</head>
<html>

<body>

<div class="container">
    <div id="sidebar-id" class="sidebar">

        <h4 class="mt-3 ml-2 text-light">{{ $user }}</h4>
        <div class="sidebar-header">
            <button onclick="close_sidebar()" class="close closedash" id="closedash" type="button">
                <span >&times</span>
            </button>
        </div>

        <hr class="bg-dark">
        <div class="sidebar-body">

            <ul>
                <p>Pages</p>
                <li class="nav-item">
                    <a  href="#first" data-toggle="collapse" aria-expanded="false" aria-controls="first">Departments</a>

                    <ul id="first" class="collapse">
                        <li class="nav-item">
                            <a href="{{ url('dashboard class') }}">Classes</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('dashboard backyard') }}">Backyards</a>
                        </li>
                        <li class="nav-item">
                            <a  href="{{ url('dashboard inside school') }}">Inside School</a>
                        </li>
                        <li class="nav-item">
                            <a  href="{{ url('dashboard outside school') }}">Outside School</a>
                        </li>
                        <li class="nav-item">
                            <a  href="{{ ('dashboard relative with school') }}">Relative with School</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a role="button" href="#second" data-toggle="collapse" aria-expanded="false" aria-controls="second">School Crew</a>

                    <ul id="second" class="collapse">
                        <li class="nav-item">
                            <a href="{{ url('dashboard headmaster') }}">Headmaster</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('dashboard professor') }}">Professors</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('dashboard student') }}">Students</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('dashboard others') }}">Others</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a  role="button" href="#third" data-toggle="collapse" aria-expanded="false" aria-controls="third">Supplies</a>

                    <ul id="third" class="collapse">
                        <li class="nav-item">
                            <a href="{{ url('dashboard classes') }}">For Class</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('dashboard quidditch') }}">For Quidditch</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a  role="button" href="#fourth" data-toggle="collapse" aria-expanded="false" aria-controls="fourth">Uniforms</a>

                    <ul id="fourth" class="collapse">
                        <li class="nav-item">
                            <a href="{{ url('dashboard gryffindor') }}">Gryffindor</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('dashboard slytherin') }}">Slytherin</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('dashboard hufflepuff') }}">Hufflepuff</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('dashboard ravenclaw') }}">Ravenclaw</a>
                        </li>
                    </ul>
                </li>




                <hr class="bg-dark">
                <li>
                    <a class="" href="{{ url('admin logout') }}">Logout</a>
                </li>
            </ul>

        </div>


    </div>



     <div id="sidebtn-id">
                   <button onclick="open_sidebar()" class="btn navbar-btn navbar-toggler navbar-light bg-light opendash" type="button"> <span class="navbar-toggler-icon "></span></button>
                   <h3 class="navbar-text text-center"><a href="{{ url('dashboard') }}" class="text-dark"><u>Admin Dashboard</u></a></h3>

         @yield('content')

     </div>


</div>


    <!-- jQuery library -->
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
@yield('script')
</body>
</html>







