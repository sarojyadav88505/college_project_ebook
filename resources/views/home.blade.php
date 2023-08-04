@extends('backend.app')


@section('title')
    Dashboard
@endsection

@section('content')
    <div class="container-fluid">
      <div class="row">
        
        {{-- Total Blogs --}}
        {{-- <div class="col-3">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>{{ $totalblog }}</h3>

              <p>Total Blogs</p>
            </div>
            <div class="icon">
              <i class="fas fa-blog"></i>
            </div>
            <a href="/blog" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div> --}}

       
        {{-- Total Admins --}}
        {{-- <div class="col-3">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>{{ $totalAdmin }}</h3>

              <p>Total Admins</p>
            </div>
            <div class="icon">
              <i class="fas fa-user-shield"></i>
            </div>
            <a href="/accounts" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div> --}}


        
      </div>
    </div>
@endsection