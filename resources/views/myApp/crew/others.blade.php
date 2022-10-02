@extends('layouts.g-app')

@section('content')

        <div class='container my-4'>
            <div class="row mb-5">
            @foreach($otherinfo as $other)

                <div class="card-body col-md-3 rounded crew-card border border-dark mb-1">
                    <img class="card-img-top mx-auto d-block img-fluid rounded border border-light" src="{{asset('img/crew/'.$other->photo)}}" style="width: 200px; height:200px;">
                    <h3 class="card-title text-light text-center">{{ $other->name }} </h3>
                    <h5 class="card-title text-light text-center">{{ $other->description }}</h4>
                </div>

                <br>
            @endforeach
        </div>
<br>
        </div>

@endsection






