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


        <span><a href="{{ url('supply create') }}" class="btn btn-primary" role="button">Create a new Supply</a></span>
        @foreach($classinfo as $class)
            <div class="row">
                <div class="table-responsive">

                    <table class="table teble-bordered bg-dark text-light rounded">
                        <tr>
                            <td class="col-md-3">
                                <p>{{ $class->name }}</p>
                            </td>
                            <td class="col-md-3">
                                <a href="">
                                    <img id='imgstyle' src="{{asset('img/supplies/'.$class->photo)}}"> <br>
                                </a>
                            </td>
                            <td class="col-md-1">
                                <a href="{{ url('supply edit/'.$class->id) }}" class="btn btn-success mb-1">edit</a>
                                <a href="{{ url('supply delete/'.$class->id) }}" class="btn btn-danger">delete</a>
                            </td>
                        </tr>
                    </table>

                </div>
            </div>
        @endforeach
    </div>


@endsection


