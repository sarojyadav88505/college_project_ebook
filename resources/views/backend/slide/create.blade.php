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
                        <!-- for Alert message-->
                        @if (session('message'))
                            <p class="alert alert-success">{{ session('message') }}</p>
                        @endif
                         <!-- End message Alert-->
                        <form action="/webslide" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input id="title" class="form-control" type="text" name="title" value="{{ old("title") }}">
                        </div>
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input id="image" class="form-control-file" type="file" name="image" value="{{ old("image") }}">
                        </div>
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror

                        <button type="submit" class="btn btn-info btn-sm">Save Record</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection