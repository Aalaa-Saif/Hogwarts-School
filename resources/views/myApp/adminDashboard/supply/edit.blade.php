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
                <div class="card-body text-dark">
                    <form method="POST" action="{{ url('supply update/'.$supply->id) }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $supply->name }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <small class="small-text" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>

                            <div class="col-md-6">
                                <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" rows="3">
                                    {{ $supply->description }}
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
                                    <option>{{ $supply->type }}</option>
                                    <option>Class</option>
                                    <option>Quidditch</option>
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

                            <div class="col-md-6">
                               <span> <img style="width: 100px; height:100px;" src="{{asset('img/supplies/'.$supply->photo)}}"></span> <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo">

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
