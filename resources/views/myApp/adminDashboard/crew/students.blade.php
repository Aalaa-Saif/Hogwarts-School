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
        @foreach($studentinfo as $student)
            <div class="row">
                <div class="table-responsive">

                    <table class="table teble-bordered bg-dark rounded text-light col-md-12">
                        <tr>
                            <td class="col-md-4">
                                <p>{{ $student->name }}</p>
                            </td>
                            <td class="col-md-4">
                                <a href="">
                                    <img id='imgstyle' src="{{asset('img/crew/'.$student->photo)}}"> <br>
                                </a>
                            </td>
                            <td class="col-md-2">
                                <a href="{{ url('crew edit/'.$student->id) }}" class="btn btn-success" role="button">edit</a>
                            </td>
                            <td class="col-md-2">
                                <a href="{{ url('crew delete/'.$student->id) }}" class="btn btn-danger" role="button">delete</a>
                            </td>
                        </tr>
                    </table>

                </div>
            </div>
        @endforeach
    </div>



@endsection



