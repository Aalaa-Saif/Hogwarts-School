@extends('layouts.g-app')
@section('content')

<div class="container my-4 popo">
    <div class="my-2">
        <div class="row">
            <img class="offset-md-5 mt-2" src="{{ asset('img/Gryffindor.jpg') }}" style="width:100px; height:100px;">
        </div>

        <div class="row">
            @foreach($gcinfo as $gc)
            <div class="col-md-5 offset-md-1">
               <h4 class="text-light unired"> {{ $gc->description }}</h4>
            </div>
            @endforeach

            @foreach($gqinfo as $gq)
            <div class="col-md-5 offset-md-1">
               <h4 class="text-light unired">{{ $gq->description }}</h4>
            </div>
            @endforeach
        </div>

        <div class="row">
            @foreach($gcinfo as $gc)
            <div class="col-md-6">
                <div id="g_c" class="carousel slide mt-5 col-md-10" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach($gc->images as $img)
                        <li data-target="#g_c" data-slide-to=" {{$loop->index}} " class="{{$loop->first ? 'active' : '' }}"></li>
                        @endforeach
                    </ol>
                    <div class="carousel-inner">

                    @foreach($gc->images as $key => $img)
                    <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                        <img class="d-block img-fluid" src="{{ asset('img/uniforms/'.$img->photo) }}">
                    </div>
                    @endforeach

                    </div>
                    <a class="carousel-control-prev" href="#g_c" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#g_c" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            @endforeach

            @foreach($gqinfo as $gq)
            <div class="col-md-6">
                <div id="g_q" class="carousel slide mt-5 col-md-10" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach($gq->images as $img)
                        <li data-target="#g_q" data-slide-to=" {{$loop->index}} " class="{{$loop->first ? 'active' : '' }}"></li>
                        @endforeach
                    </ol>
                    <div class="carousel-inner">
                    @foreach($gq->images as $key => $img)
                    <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                        <img class="d-block img-fluid" src="{{ asset('img/uniforms/'.$img->photo) }}">
                    </div>
                    @endforeach
                    </div>

                    <a class="carousel-control-prev" href="#g_q" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#g_q" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            @endforeach
        </div>


        <!-- -->
        <div class="row mt-5">
            <img class="offset-md-5 mt-5" src="{{ asset('img/Slytherin.jpg') }}" style="width:100px; height:100px;">
        </div>
        <div class="row">
            @foreach($scinfo as $sc)
            <div class="col-md-5 offset-md-1">
              <h4 class="text-light unigreen">{{ $sc->description }}</h4>
            </div>
            @endforeach

            @foreach($sqinfo as $sq)
            <div class="col-md-5 offset-md-1">
              <h4 class="text-light unigreen">{{ $sq->description }}</h4>
            </div>
            @endforeach
        </div>


        <div class="row">
            @foreach($scinfo as $sc)
            <div class="col-md-6">
                <div id="s_c" class="carousel slide mt-5 col-md-10" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach($sc->images as $img)
                        <li data-target="#s_c" data-slide-to=" {{$loop->index}} " class="{{$loop->first ? 'active' : '' }}"></li>
                        @endforeach
                    </ol>
                    <div class="carousel-inner">

                    @foreach($sc->images as $key => $img)
                    <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                        <img class="d-block img-fluid" src="{{ asset('img/uniforms/'.$img->photo) }}">
                    </div>
                    @endforeach

                    </div>
                    <a class="carousel-control-prev" href="#s_c" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#s_c" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            @endforeach

            @foreach($sqinfo as $sq)
            <div class="col-md-6">
                <div id="s_q" class="carousel slide mt-5 col-md-10" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach($sq->images as $img)
                        <li data-target="#s_q" data-slide-to=" {{$loop->index}} " class="{{$loop->first ? 'active' : '' }}"></li>
                        @endforeach
                    </ol>
                    <div class="carousel-inner">

                    @foreach($sq->images as $key => $img)
                    <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                        <img class="d-block img-fluid" src="{{ asset('img/uniforms/'.$img->photo) }}">
                    </div>
                    @endforeach

                    </div>
                    <a class="carousel-control-prev" href="#s_q" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#s_q" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <!-- -->
        <div class="row mt-5">
            <img class="offset-md-5 mt-5" src="{{ asset('img/Hufflepuff.jpg') }}" style="width:100px; height:100px;">
        </div>
        <div class="row">
            @foreach($hcinfo as $hc)
            <div class="col-md-5 offset-md-1">
                <h4 class="text-light uniyellow"> {{ $hc->description }}</h4>
              </div>
            @endforeach

            @foreach($hqinfo as $hq)
            <div class="col-md-5 offset-md-1">
                <h4 class="text-light uniyellow">  {{ $hq->description }}</h4>
              </div>
            @endforeach
        </div>

        <div class="row">
            @foreach($hcinfo as $hc)
            <div class="col-md-6">
                <div id="h_c" class="carousel slide mt-5 col-md-10" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach($hc->images as $img)
                        <li data-target="#h_c" data-slide-to=" {{$loop->index}} " class="{{$loop->first ? 'active' : '' }}"></li>
                        @endforeach
                    </ol>
                    <div class="carousel-inner">

                    @foreach($hc->images as $key => $img)
                    <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                        <img class="d-block img-fluid" src="{{ asset('img/uniforms/'.$img->photo) }}">
                    </div>
                    @endforeach

                    </div>
                    <a class="carousel-control-prev" href="#h_c" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#h_c" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            @endforeach

            @foreach($hqinfo as $hq)
            <div class="col-md-6">
                <div id="h_q" class="carousel slide mt-5 col-md-10" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach($hq->images as $img)
                        <li data-target="#h_q" data-slide-to=" {{$loop->index}} " class="{{$loop->first ? 'active' : '' }}"></li>
                        @endforeach
                    </ol>
                    <div class="carousel-inner">

                    @foreach($hq->images as $key => $img)
                    <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                        <img class="d-block img-fluid" src="{{ asset('img/uniforms/'.$img->photo) }}">
                    </div>
                    @endforeach

                    </div>
                    <a class="carousel-control-prev" href="#h_q" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#h_q" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            @endforeach
        </div>

        <!-- -->
        <div class="row mt-5">
            <img class="offset-md-5 mt-5" src="{{ asset('img/Ravenclaw.jpg') }}" style="width:100px; height:100px;">
        </div>
        <div class="row">
            @foreach($rcinfo as $rc)
            <div class="col-md-5 offset-md-1">
                <h4 class="text-light uniblue"> {{ $rc->description }}</h4>
              </div>
            @endforeach

            @foreach($rqinfo as $rq)
            <div class="col-md-5 offset-md-1">
                <h4 class="text-light uniblue"> {{ $rq->description }}</h4>
              </div>
            @endforeach
        </div>

        <div class="row">
            @foreach($rcinfo as $rc)
            <div class="col-md-6">
                <div id="r_c" class="carousel slide mt-5 col-md-10" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach($rc->images as $img)
                        <li data-target="#r_c" data-slide-to=" {{$loop->index}} " class="{{$loop->first ? 'active' : '' }}"></li>
                        @endforeach
                    </ol>
                    <div class="carousel-inner">

                    @foreach($rc->images as $key => $img)
                    <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                        <img class="d-block img-fluid" src="{{ asset('img/uniforms/'.$img->photo) }}">
                    </div>
                    @endforeach

                    </div>
                    <a class="carousel-control-prev" href="#r_c" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#r_c" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>

            @endforeach

            @foreach($rqinfo as $rq)
            <div class="col-md-6">
                <div id="r_q" class="carousel slide mt-5 col-md-10" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach($rq->images as $img)
                        <li data-target="#r_q" data-slide-to=" {{$loop->index}} " class="{{$loop->first ? 'active' : '' }}"></li>
                        @endforeach
                    </ol>
                    <div class="carousel-inner">

                    @foreach($rq->images as $key => $img)
                    <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
                        <img class="d-block img-fluid" src="{{ asset('img/uniforms/'.$img->photo) }}">
                    </div>
                    @endforeach

                    </div>
                    <a class="carousel-control-prev" href="#r_q" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#r_q" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

<br>
<br>
<br>
</div>

@endsection
