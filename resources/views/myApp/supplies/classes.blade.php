@extends('layouts.g-app')

@section('content')
    <div class="container my-4">

    <div class="row mt-3 mb-5">
        @foreach($classinfo as $class)
        <div class="col-md-4">
            <div class="card mt-2">
                <div class="card-body">
                    <img class="card-img-top img-fluid" src="{{asset('img/supplies/'.$class->photo)}}" style="width:300px; height:300px;">
                    <h2 class="card-title">{{ $class->name }}</h2>
                    <p>{{  $class->description }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

<br>

    </div>

@endsection

