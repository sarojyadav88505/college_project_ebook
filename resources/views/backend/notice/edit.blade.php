@extends('backend.app')
@section('title')
    Add Notice
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/webnotice" class="btn btn-info btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        @if (session('message'))
                            <p class="alert alert-success">{{ session('message') }}</p>
                        @endif
                       <form action="/webnotice/{{ $notice->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                            <div class="form-group">
                                <label for="title">Title<span class="text-danger">*</span></label>
                                <input id="title" class="form-control" type="text" name="title" placeholder="Title" value="{{ $notice->title }}">
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea id="editor" class="form-control" name="description" rows="3">{{ $notice->description }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="image">Upload Image</label>
                                <input id="image" class="form-control-file" type="file" name="image">
                            </div>

                            <div class="my-2">
                                <img src="{{ asset($notice->image) }}" width="120" alt="">
                            </div> 

                            <button type="submit" class="btn btn-primary btn-sm">Update Record</button>
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection