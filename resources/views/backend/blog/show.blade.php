@extends('backend.app')
@section('title')
    View Blog 
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <a href="/webblog" class="btn btn-info btn-sm">Back</a>
                
            </div>
            <div class="card-body"> 
                <h1>{{ $blog->title }}</h1>   
                <img src="{{ asset($blog->image) }}" alt="">            
                <p>{!! $blog->description !!}</p>
            </div>
        </div>
    </div>
@endsection