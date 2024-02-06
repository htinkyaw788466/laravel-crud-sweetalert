@extends('layouts.main')

@section('title','create persons')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5">
            <h1 class="text-center">Please Enter All fields</h1>
            <form action="{{ route('persons.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="firstname">FirstName</label>
                    <input type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname">
                    @error('firstname')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                            </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="lastname">LastName</label>
                    <input type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname">
                    @error('lastname')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                            </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email">
                    @error('email')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                            </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="city">City</label>
                    <input type="text" class="form-control @error('city') is-invalid @enderror" name="city">
                    @error('city')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                            </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="website_url">URL</label>
                    <input type="text" class="form-control @error('website_url') is-invalid @enderror" name="website_url">
                    @error('website_url')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                            </span>
                    @enderror
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Create</button>
            </form>

        </div>
    </div>
</div>

@endsection
