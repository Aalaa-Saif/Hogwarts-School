@extends('layouts.g-app')

@section('content')

        <div class="container my-4">
            @foreach($classinfo as $class)
                <div class="row">
                        <div class="col-md-9 offset-md-1">
                            <div id='dep_info_2' class="table-responsive">
                                <table class="table">
                                        <b> <h3 class="text-left border-top" id='dep_p'>{{ $class->name }}</h3> </b>
                                    <tr>
                                        <td>
                                            <img class="img-fluid myImg" id="myImg" src="{{asset('img/departments/'.$class->photo)}}" style="width:200px; height:200px;" data_id="{{$class->id}}">

                                        </td>
                                        <td class="text-left">
                                            <p>{{ $class->description }}</p>
                                        </td>
                                    </tr>

                                </table>

                            </div>

                            @foreach($classinfo as $class)
                            <div class="modal" id="mymodal-{{ $class->id }}">

                            <!-- Close Button -->
                            <button class="close" type="button">
                                <span class="close_span">&times</span>
                            </button>

                            <!-- Modal Content (Image) -->
                            <img class="modal-content img-fluid" id="img01-{{ $class->id }}" style="width:600px; height:600px;">
                            </div>
                            @endforeach

                        </div>
                </div>
                <hr>
            @endforeach


        </div>
<br>

@endsection
