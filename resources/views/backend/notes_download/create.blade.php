@extends('backend.app')
@section('title')
    Upload New File
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/webdownload" class="btn btn-info btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        @if (session('message'))
                            <p class="alert alert-success">{{ session('message') }}</p>
                        @endif
                       <form action="/webdownload" method="post" enctype="multipart/form-data">
                        @csrf
                            <div class="form-group">
                                <label for="title">Title<span class="text-danger">*</span></label>
                                <input id="title" class="form-control" type="text" name="title" placeholder="Title" value="{{ old("title") }}">
                            </div>
                            @error('title')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                            
                            <div class="form-group">
                                <label for="document">Upload File <span class="text-danger">*</span></label>
                                <input id="document" class="form-control-file" type="file" name="document" value="{{ old("document") }}">
                            </div>
                            @error('document')
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