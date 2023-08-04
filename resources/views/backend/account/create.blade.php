@extends('backend.app')

@section('title')
    Create Admin
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/webaccounts" class="btn btn-primary btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        @if (session('message'))
                            <p class="alert alert-success">{{ session('message') }}</p>
                        @endif
                        <form action="/webaccounts" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" class="form-control" type="text" name="name" value="{{ old('name') }}">
                        </div>

                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" class="form-control" type="text" name="email" value="{{ old('email') }}">
                        </div>

                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" class="form-control" type="password" name="password" value="{{ old('password') }}">
                        </div>

                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                        <div class="form-group">
                            <label for="confirm">Confirm Password</label>
                            <input id="confirm" class="form-control" type="password" name="password_confirmation" value="{{ old('password_confirmation') }}">
                        </div>

                        @error('password_confirmation')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <button type="submit" class="btn btn-info btn-sm">Save User</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection