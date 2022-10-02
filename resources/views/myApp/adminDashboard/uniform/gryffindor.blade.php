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
        @foreach($gcinfo as $gc)
            <div class="row">
                <div class="table-responsive">

                    <table class="table teble-bordered bg-dark text-light col-md-12">
                        <th>{{ $gc->type }}</th>
                        <tr>
                            <td class="col-md-4">
                                <a href="">
                                    @foreach($gc->images as $img)
                                    <img id='imgstyle' src="{{asset('img/uniforms/'.$img->photo)}}"> <br>
                                    @endforeach
                                </a>
                            </td>
                            <td class="col-md-2">
                                <a href="{{ url('uniform edit/'.$gc->id) }}" class="btn btn-success">edit</a>
                            </td>
                            <td class="col-md-2">
                                <a href="{{ url('uniform delete/'.$gc->id) }}" class="btn btn-danger">delete</a>
                            </td>
                        </tr>
                    </table>

                </div>
            </div>
        @endforeach

        @foreach($gqinfo as $gq)
        <div class="row">
            <div class="table-responsive">

                <table class="table teble-bordered bg-dark text-light col-md-12">
                    <th>{{ $gq->type }}</th>
                    <tr>
                        <td class="col-md-4">
                            <a href="">
                                @foreach($gq->images as $img)
                                <img id='imgstyle' src="{{asset('img/uniforms/'.$img->photo)}}"> <br>
                                @endforeach
                            </a>
                        </td>
                        <td class="col-md-2">
                            <a href="{{ url('uniform edit/'.$gq->id) }}" class="btn btn-success">edit</a>
                        </td>
                        <td class="col-md-2">
                            <a href="{{ url('uniform delete/'.$gq->id) }}" class="btn btn-danger">delete</a>
                        </td>
                    </tr>
                </table>

            </div>
        </div>
    @endforeach
    </div>



@endsection


