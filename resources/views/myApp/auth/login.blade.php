@extends('layouts.g-app')

@section('content')
    <div class="container mt-5">
        <div class="col-md-8 offset-md-2 mt-5">

            <div class="card border-0 bg-dark crudcard">
                <div class="card-header text-light text-center"> Admin Login</div>
                <div class="card-body border-0 text-light">
                    <form method="POST" action="{{ route('log') }}" class="loginCard img-fluid py-md-5" role="form">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" autofocus>

                                @error('email')
                                    <small class="small-text" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="description" type="password" class="form-control @error('password') is-invalid @enderror" name="password">

                                @error('password')
                                    <small class="small-text" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </small>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row ">
                            <div class="col-md-2 offset-md-8">
                                <button type="submit"class='btn btn-primary'>
                                    Login
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>

@endsection
