@extends('layouts.dashboard-layout')

@section('content')
<div class="container">

        <div class="col-md-8 offset-md-2">

            @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
            @endif


            <div class="card bg-dark text-light crudcard">
                <div class="card-header text-center">Edit</div>
                <div class="card-body text-light">
                    <form method="POST" action="{{ url('uniform update/'.$uniform->id) }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>

                            <div class="col-md-6">
                                <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" rows="3">
                                    {{ $uniform->description }}
                                </textarea>

                                @error('description')
                                    <small class="small-text" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">Type</label>

                            <div class="col-md-6">
                                <select id="type" class="form-control @error('type') is-invalid @enderror" name="type">
                                    <option>{{ $uniform->type }}</option>
                                    <option>Gryffindor Class</option>
                                    <option>Gryffindor Quidditch</option>
                                    <option>Slytherin Class</option>
                                    <option>Slytherin Quidditch</option>
                                    <option>Ravenclaw Class</option>
                                    <option>Ravenclaw Quidditch</option>
                                    <option>Hufflepuff Class</option>
                                    <option>Hufflepuff Quidditch</option>
                                </select>

                                @error('type')
                                    <small class="small-text" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="photo" class="col-md-4 col-form-label text-md-right">Photo</label>
                            @foreach($uniform->images as $uni)
                            <div class="col-md-2 mx-1">

                                <div class="card-body">
                                    <img class="card-img-top mb-1" style="width:80px; height:80px" src="{{asset('img/uniforms/'.$uni->photo)}}">

                                    <a class="btn btn-danger text-light" href="{{ url('delete image/'.$uni->id) }}">Delete</a>
                                </div>

                            </div>
                            @endforeach
                        </div>
                        <div class="form-group row">
                            <label for="photo" class="col-md-4 col-form-label text-md-right">Add More Photo</label>
                            <div class="col-md-6">

                            <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo[]" multiple>
                            @error('photo')
                            <small class="small-text">
                                <strong>{{ $message }}</strong>
                            </small>
                        @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit"class='btn btn-primary'>
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
