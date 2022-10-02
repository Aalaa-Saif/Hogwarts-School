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


        <span><a href="{{ url('department create') }}" class="btn btn-primary" role="button">Create a new Department section</a></span>
        @foreach($insideinfo as $inside)
            <div class="row">
                <div class="table-responsive">

                    <table class="table teble-bordered bg-dark text-light col-md-12">
                        <tr>
                            <td class="col-md-4">
                                <p>{{ $inside->name }}</p>
                            </td>
                            <td class="col-md-4">
                                <a href="">
                                    <img id='imgstyle' src="{{asset('img/departments/'.$inside->photo)}}"> <br>
                                </a>
                            </td>
                            <td class="col-md-2">
                                <a href="{{ url('department edit/'.$inside->id) }}" class="btn btn-success">edit</a>
                            </td>
                            <td class="col-md-2">
                                <a href="{{ url('delete/'.$inside->id) }}" class="btn btn-danger">delete</a>
                            </td>
                        </tr>
                    </table>

                </div>
            </div>
        @endforeach
    </div>



@endsection


