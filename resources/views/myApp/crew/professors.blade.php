@extends('layouts.g-app')

@section('content')

        <div class='container my-4'>

            @foreach($professorinfo as $professor)
                <div class="card-body crew-card mt-1">
                    <div class="row">
                        <img class="col-md-3 img-fluid rounded-circle border border-dark" src="{{asset('img/crew/'.$professor->photo)}}" style="width:300px; height:300px;">
                        <div class="col-md-8 pt-1">
                            <h3 class=" col-md-6 card-title text-secondary crew-card2 rounded profjs text-center mt-5">{{ $professor->name }} </h3>
                            <hr>
                            <div class="crew-card2 card-body rounded profjs2">
                                <h4>{{ $professor->description }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <br>
            <br>
            <br>
        </div>

@endsection






