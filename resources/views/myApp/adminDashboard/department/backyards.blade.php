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
        @foreach($backyardinfo as $backyard)
            <div class="row">
                <div class="table-responsive">

                    <table class="table teble-bordered bg-dark text-light rounded">
                        <tr>
                            <td class="col-md-3">
                                <p>{{ $backyard->name }}</p>
                            </td>
                            <td class="col-md-3">
                                <a href="">
                                    <img id='imgstyle' src="{{asset('img/departments/'.$backyard->photo)}}"> <br>
                                </a>
                            </td>
                            <td class="col-md-1">
                                <a href="{{ url('department edit/'.$backyard->id) }}" class="btn btn-success mb-1">edit</a>
                                <a href="{{ url('delete/'.$backyard->id) }}" class="btn btn-danger">delete</a>
                            </td>
                        </tr>
                    </table>

                </div>
            </div>
        @endforeach
    </div>



@endsection


