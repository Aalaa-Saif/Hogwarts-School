@extends('layouts.g-app')

@section('content')

        <div class="container my-4">
            @foreach($insideinfo as $inside)
                <div class="row">
                        <div class="col-md-9 offset-md-1">
                            <div id='dep_info_2' class="table-responsive">
                                <table class="table">
                                        <b> <h3 class="text-left border-top" id='dep_p'>{{ $inside->name }}</h3> </b>
                                    <tr>
                                        <td>
                                            <img class="img-fluid myImg" id="myImg" src="{{asset('img/departments/'.$inside->photo)}}" style="width:200px; height:200px;" data_id="{{$inside->id}}">

                                        </td>
                                        <td class="text-left">
                                            <p>{{ $inside->description }}</p>
                                        </td>
                                    </tr>

                                </table>

                            </div>

                            @foreach($insideinfo as $inside)
                            <div class="modal" id="mymodal-{{ $inside->id }}">

                            <!-- The Close Button -->
                            <button class="close" type="button">
                                <span class="close_span">&times</span>
                            </button>

                            <!-- Modal Content (The Image) -->
                            <img class="modal-content img-fluid" id="img01-{{ $inside->id }}" style="width:600px; height:600px;">
                            </div>
                            @endforeach

                        </div>
                </div>
                <hr>
            @endforeach


        </div>
<br>

@endsection
