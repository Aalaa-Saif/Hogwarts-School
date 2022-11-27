<!DOCTYPE html>
<head>
    <title>Hogwarts School</title>
    <link href="{{ asset('css/dashboardCss.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="nofollow" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="{{ asset('js/dashboardJS.js') }}"></script>
</head>
<html>

<body>

    <div id="name_space" class="name_space">
        <form method="POST" action="{{ url('admin name/'.$user->id) }}">
            @csrf

            <div class="form-group row my-4">
                <label for="name" class="col-md-2 col-form-label text-md-right">Name</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                    @error('name')
                        <small class="small-text" role="alert">
                            <strong>{{ $message }}</strong>
                        </small>
                    @enderror
                </div>
            </div>

            <div class="form-group row mb-0 my-4">
                <div class="col-md-6 offset-md-4">
                    <button type="submit"class='btn btn-primary'>
                        Update
                    </button>

                    <a class="btn btn-danger text-light" onclick="name_space_close()">Close</a>
                </div>
            </div>
        </form>
    </div>

<div class="container">
    <div id="sidebar-id" class="sidebar">

        <p class="mt-5 admin_name text-center">{{ $user->name }}</p>
        <img src="{{ asset('img/edit.png') }}" href="" style="width:16px; height:16px;" onclick="name_space()">
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



     <div id="sidebtn-id" class="row">
            <button onclick="open_sidebar()" class="btn navbar-btn navbar-toggler navbar-light bg-light opendash col-md-1 mt-4" type="button">
                <span class="navbar-toggler-icon"> </span>
            </button>
            <p class="col-md-10 mt-5"><a href="{{ url('dashboard') }}"><b>Admin Dashboard</b></a></p>

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







