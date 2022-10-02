@extends('layouts.g-app')

@section('content')

        <div class='container my-4'>

            @foreach($headmasterinfo as $headmaster)
                <div class="card-body rounded crew-card">
                    <div class="row">
                        <img class="col-md-3 img-fluid rounded-circle border border-dark" src="{{asset('img/crew/'.$headmaster->photo)}}" style="width:300px; height:300px;">
                        <div class="col-md-6 crew-card2 rounded offset-md-1 mt-1 pt-1">
                            <h3 class="card-title text-secondary">{{ $headmaster->name }} </h3>
                            <hr>
                            <div class="col-md-10">
                                <h4>{{ $headmaster->description }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
            @endforeach
<br>
<br>
        </div>

@endsection






