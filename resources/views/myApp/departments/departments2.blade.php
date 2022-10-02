@extends('layouts.g-app')

@section('content')
 <div class="container-fluid my-4">

         <div class="main_title text-center">
            <b><p> Welcome to School Departments </p></b>
         </div>

        <div class='row dep-card'>

            <div  class="col-md-4">
                    <div class="card-body dep">
                        <h2 class="card-title text-center">Outside School</h2>
                        <a href="outside school"> <img class="card-img-top img-responsive" src="{{ asset('img/outside.jpg') }}"></a>
                    </div>
            </div>

            <div  class="col-md-4">
                <div class="card-body dep">
                    <h2 class="card-title text-center">Relative whit School</h2>
                    <a href="relative with school"><img class="card-img-top img-responsive" src="{{ asset('img/relative.jpg') }}"></a>
                </div>
            </div>
        </div>

   <br>
    <ul class="pagination justify-content-center mb-5">
        <li class="page-item"><a class="page-link" href="department">1</a></li>
        <li class="page-item active"><a class="page-link" href="department2">2</a></li>
    </ul>
<br>
 </div>
@endsection

