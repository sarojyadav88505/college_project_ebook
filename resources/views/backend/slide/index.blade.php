@extends('backend.app')
@section('title')
    Slides
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/webslide/create" class=" btn btn-sm btn-primary">Add Slide</a>
                        <h2>All Slides</h2>
                    </div>
                    <div class="card-body">
                        <table class="table" id="datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>title</th>
                                    <th>Slide image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($slides as $index => $slide)
                                    <tr>
                                        <td>{{ ++$index }}</td>
                                        <td>{{ $slide->title }}</td>
                                        <td><img src="{{ asset($slide->image) }}" alt="" width="59"></td>
                                        <td>
                                            <a href="/webslide/{{ $slide->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
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