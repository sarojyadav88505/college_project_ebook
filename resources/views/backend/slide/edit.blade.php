@extends('backend.app')
@section('title')
    Add Slide
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <a href="/webslide" class="btn btn-info btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        @if (session('message'))
                            <p class="alert alert-success">{{ session('message') }}</p>
                        @endif
                        <form action="/webslide/{{ $slide->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input id="title" class="form-control" type="text" name="title" value="{{ $slide->title }}">
                        </div>

                        <div class="form-group">
                            <label for="image">Image</label>
                            <input id="image" class="form-control-file" type="file" name="image">
                        </div>

                        
                            <!--This code display our Previous image file-->
                        <div class="my-2">
                            <img src="{{ asset($slide->image) }}" alt="" width="180">
                        </div>


                        <button type="submit" class="btn btn-info btn-sm">Update Record</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection