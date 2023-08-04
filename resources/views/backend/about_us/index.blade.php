@extends('backend.app')
@section('title')
    Information
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/webabout/create" class="btn btn-info btn-sm">Add info</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped" id="datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Company name / Developer Name</th>
                                    <th>Number</th>
                                    <th>Location</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($about as $index => $about)
                                    <tr>
                                        <td>{{ ++$index }}</td>
                                        <td>{{ $about->name }}</td>
                                        <td>{{ $about->phone }}</td>
                                        <td>{{ $about->location }}</td>
                                        <td>
                                            <img src="{{ asset($about->image) }}" width="120" alt="{{ $about->image }}">            

                                        </td>
                                        <td>
                                            <form action="/webabout/{{ $about->id }}" method="post">
                                                @csrf
                                                @method('delete')
                                            <a href="/webabout/{{ $about->id }}/edit" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>                                                
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection