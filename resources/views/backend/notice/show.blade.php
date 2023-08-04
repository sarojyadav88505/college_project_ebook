@extends('backend.app')
@section('title')
    View notice 
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <a href="/webnotice" class="btn btn-info btn-sm">Back</a>
                
            </div>
            <div class="card-body"> 
                <h1>{{ $notice->title }}</h1>   
                <img src="{{ asset($notice->image) }}" width="900" alt="">            
                <p>{!! $notice->description !!}</p>
            </div>
        </div>
    </div>
@endsection