@extends('layouts.g-app')

@section('content')
    <div class="container my-4">

        <div class="row">
            <div class="col-md-10">
                <div class="card bg-dark text-light offset-md-2 mt-2 pt-2">
                    <div class="card-header cardjs" aria-expanded="false" aria-controls="coll" data-target="#coll">
                        <p>Quidditch Sport</p>
                    </div>

                    <div class="card-body cardjs2" style="display: none" id="coll">
                        <p>Is a sport of two teams of seven players (six players with the seeker "minimum of seven & maximum 21")
                            those being the three chasers, one keeper, and two beaters are always on the pitch, and the seeker
                            who is off-pitch each mounted on a broomstick.<br>
                            To score points, chasers or keepers must get the quaffle into one of three of the opposing hoops which scores the team 10 points.
                            To impede the quaffle from advancing down the pitch, chasers and keepers can tackle opposing chasers and keepers at
                            the same time as beaters using their bludgers—dodgeballs—to take out opposing players.  Once a player is hit by an opposing bludger,
                            that player must dismount their broom, drop any ball being held, and return to touch their hoops before being allowed back into play.
                            The game is ended once the snitch is caught by one of the seekers, awarding that team 30 points.


                        </p>
                    </div>
                </div>
            </div>
        </div>

    <div class="row mt-3 mb-5">
        @foreach($quidditchinfo as $quidditch)
        <div class="col-md-4">
            <div class="card mt-2">
                <div class="card-body">
                    <img class="card-img-top img-fluid" src="{{asset('img/supplies/'.$quidditch->photo)}}" style="width:300px; height:300px;">
                    <h2 class="card-title">{{ $quidditch->name }}</h2>
                    <p>{{  $quidditch->description }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

<br>

    </div>

@endsection

