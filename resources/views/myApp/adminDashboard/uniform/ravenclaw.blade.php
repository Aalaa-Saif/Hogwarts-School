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


        <span><a href="{{ url('uniform create') }}" class="btn btn-primary" role="button">Create a new Uniform</a></span>
        @foreach($rcinfo as $rc)
            <div class="row">
                <div class="table-responsive col-md-11">

                    <table class="table teble-bordered bg-dark text-light rounded">
                        <th>{{ $rc->type }}</th>
                        <tr>
                            <td class="col-md-3">
                                <a href="">
                                    @foreach($rc->images as $img)
                                    <img id='imgstyle' src="{{asset('img/uniforms/'.$img->photo)}}"> <br>
                                    @endforeach
                                </a>
                            </td>
                            <td class="col-md-1">
                                <a href="{{ url('uniform edit/'.$rc->id) }}" class="btn btn-success">edit</a>
                                <a href="{{ url('uniform delete/'.$rc->id) }}" class="btn btn-danger">delete</a>
                            </td>
                        </tr>
                    </table>

                </div>
            </div>
        @endforeach

        @foreach($rqinfo as $rq)
        <div class="row">
            <div class="table-responsive col-md-11">

                <table class="table teble-bordered bg-dark text-light rounded">
                    <th>{{ $rq->type }}</th>
                    <tr>
                        <td class="col-md-3">
                            <a href="">
                                @foreach($rq->images as $img)
                                <img id='imgstyle' src="{{asset('img/uniforms/'.$img->photo)}}"> <br>
                                @endforeach
                            </a>
                        </td>
                        <td class="col-md-1">
                            <a href="{{ url('uniform edit/'.$rq->id) }}" class="btn btn-success">edit</a>
                            <a href="{{ url('uniform delete/'.$rq->id) }}" class="btn btn-danger">delete</a>
                        </td>
                    </tr>
                </table>

            </div>
        </div>
    @endforeach
    </div>



@endsection


