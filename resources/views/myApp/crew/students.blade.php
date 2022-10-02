@extends('layouts.g-app')

@section('content')

        <div class='container my-4'>
            <div class="row crew-card pt-2 pl-5 rounded mb-4">

            @foreach($studentinfo as $student)
            <div class="col-md-4 rounded my-3">
                <img class="col-md-8 img-fluid rounded-circle border border-dark" src="{{asset('img/crew/'.$student->photo)}}" style="width:300px; height:260px;">
                <h3 class="card-title text-light pl-4">{{ $student->name }} </h3>
            </div>

           @endforeach
          </div>
          <br>
          <br>
        </div>

@endsection






