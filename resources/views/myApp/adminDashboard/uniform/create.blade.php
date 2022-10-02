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
                <div class="card-header text-center">Create a new Uniform</div>
                <div class="card-body text-light">
                    <form method="POST" action="{{ route('uniformStore') }}" enctype="multipart/form-data">
                        @csrf



                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>

                            <div class="col-md-6">
                                <textarea id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" rows="3"></textarea>

                                @error('description')
                                    <small class="small-text text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">Type</label>

                            <div class="col-md-6">
                                <select id="type" type="select" class="form-control @error('type') is-invalid @enderror" name="type">
                                    <option></option>
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
                                    <small class="small-text text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </small>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="photo" class="col-md-4 col-form-label text-md-right">Photo</label>

                            <div class="col-md-6 input-group control-group">
                                <input type="file" class="form-control" name="photo[]" multiple>

                                @error('photo')
                                    <small class="small-text text-danger">
                                        <strong>{{ $message }}</strong>
                                    </small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                  Send
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
