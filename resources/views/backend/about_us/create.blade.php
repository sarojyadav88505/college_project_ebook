@extends('backend.app')
@section('title')
    New Blog
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
                       <form action="/webabout" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label for="name">Name<span class="text-danger">*</span></label>
                                <input id="name" class="form-control" type="text" name="name" placeholder="name" value="{{ old("name") }}">
                            </div>

                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            
                            <div class="form-group">
                                <label for="phone">Contact Number<span class="text-danger">*</span></label>
                                <input id="phone" class="form-control" type="text" name="phone" placeholder="phone" value="{{ old("phone") }}">
                            </div>

                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <div class="form-group">
                                <label for="location">Location<span class="text-danger">*</span></label>
                                <input id="location" class="form-control" type="text" name="location" placeholder="location" value="{{ old("location") }}">
                            </div>

                            @error('location')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            
                            
                            <div class="form-group">
                                <label for="image">Upload Image <span class="text-danger">*</span></label>
                                <input id="image" class="form-control-file" type="file" name="image" value="{{ old("image") }}">
                            </div>

                            @error('image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror

                            <button type="submit" class="btn btn-primary btn-sm">Save Record</button>
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection