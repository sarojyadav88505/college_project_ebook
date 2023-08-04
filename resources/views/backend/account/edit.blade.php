@extends('backend.app')

@section('title')
    Edit Admin
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
                        <form action="/webaccounts/{{ $user->id }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" class="form-control" type="text" name="name" value="{{ $user->name }}">
                        </div>


                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" class="form-control" type="text" name="email" value="{{ $user->email }}">
                        </div>

                        <div class="form-group">
                            <label for="password">Change Password</label>
                            <input id="password" class="form-control" type="password" name="password">
                        </div>

                        <div class="form-group">
                            <label for="confirm">Re-Type Password</label>
                            <input id="confirm" class="form-control" type="password" name="password_confirmation">
                        </div>

                        <button type="submit" class="btn btn-info btn-sm">Update Record</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection