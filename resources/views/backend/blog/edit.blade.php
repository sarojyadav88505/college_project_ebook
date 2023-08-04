@extends('backend.app')
@section('title')
    Add Course
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/webblog" class="btn btn-info btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        @if (session('message'))
                            <p class="alert alert-success">{{ session('message') }}</p>
                        @endif
                       <form action="/webblog/{{ $blog->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                            <div class="form-group">
                                <label for="title">Title<span class="text-danger">*</span></label>
                                <input id="title" class="form-control" type="text" name="title" placeholder="Title" value="{{ $blog->title }}">
                            </div>

                            <div class="form-group">
                                <label for="description">Description <span class="text-danger">*</span></label>
                                <textarea id="editor" class="form-control" name="description" rows="3">{{ $blog->description }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="image">Upload Image <span class="text-danger">*</span></label>
                                <input id="image" class="form-control-file" type="file" name="image">
                            </div>

                            <div class="my-2">
                                <img src="{{ asset($blog->image) }}" width="120" alt="">
                            </div> 

                            <button type="submit" class="btn btn-primary btn-sm">Update Record</button>
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection