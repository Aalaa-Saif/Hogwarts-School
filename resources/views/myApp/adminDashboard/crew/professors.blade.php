@extends('layouts.dashboard-layout')

@section('content')
    <div class="container">
        <div class="col-md-6 offset-md-2">
            @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
        </div>


        <span><a href="{{ url('crew create') }}" class="btn btn-primary" role="button">Create a new Crew</a></span>
        @foreach($professorinfo as $professor)
            <div class="row">
                <div class="table-responsive">

                    <table class="table teble-bordered bg-dark rounded text-light rounded">
                        <tr>
                            <td class="col-md-3">
                                <p>{{ $professor->name }}</p>
                            </td>
                            <td class="col-md-3">
                                <a href="">
                                    <img id='imgstyle' src="{{asset('img/crew/'.$professor->photo)}}"> <br>
                                </a>
                            </td>
                            <td class="col-md-1">
                                <a href="{{ url('crew edit/'.$professor->id) }}" class="btn btn-success mb-1" role="button">edit</a>
                                <a href="{{ url('crew delete/'.$professor->id) }}" class="btn btn-danger" role="button">delete</a>
                            </td>
                        </tr>
                    </table>

                </div>
            </div>
        @endforeach
    </div>



@endsection



