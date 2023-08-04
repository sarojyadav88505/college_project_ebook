@extends('backend.app')
@section('title')
    Edit info
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/webabout" class="btn btn-info btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        @if (session('message'))
                            <p class="alert alert-success">{{ session('message') }}</p>
                        @endif
                       <form action="/webabout/{{ $about->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                            <div class="form-group">
                                <label for="name">Company Name</label>
                                <input id="name" class="form-control" type="text" name="name" placeholder="Category Name" value="{{ $about->name }}">
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone Number <span class="text-danger">*</span></label>
                                <input id="phone" class="form-control" type="text" name="phone" placeholder="+977-9814896965" value="{{ $about->phone }}">
                            </div>
                            <div class="form-group">
                                <label for="location">Company Location <span class="text-danger">*</span></label>
                                <input id="location" class="form-control" type="text" name="location" placeholder="Asia,Nepal,Province-2-Janakpur" value="{{ $about->location }}">
                            </div>

                            <div class="form-group">
                                <label for="image">Course Image <span class="text-danger">*</span></label>
                                <input id="image" class="form-control-file" type="file" name="image">
                            </div>

                            <button type="submit" class="btn btn-primary btn-sm">Update Record</button>
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection