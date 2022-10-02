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
        @foreach($quidditchinfo as $quidditch)
            <div class="row">
                <div class="table-responsive">

                    <table class="table teble-bordered bg-dark text-light col-md-12">
                        <tr>
                            <td class="col-md-4">
                                <p>{{ $quidditch->name }}</p>
                            </td>
                            <td class="col-md-4">
                                <a href="">
                                    <img id='imgstyle' src="{{asset('img/supplies/'.$quidditch->photo)}}"> <br>
                                </a>
                            </td>
                            <td class="col-md-2">
                                <a href="{{ url('supply edit/'.$quidditch->id) }}" class="btn btn-success">edit</a>
                            </td>
                            <td class="col-md-2">
                                <a href="{{ url('supply delete/'.$quidditch->id) }}" class="btn btn-danger">delete</a>
                            </td>
                        </tr>
                    </table>

                </div>
            </div>
        @endforeach
    </div>



@endsection


