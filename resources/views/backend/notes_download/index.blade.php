@extends('backend.app')
@section('title')
    Uploaded Files
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/webdownload/create" class="btn btn-info btn-sm">Upload New File</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped" id="datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($download as $index => $download)
                                    <tr>
                                        <td>{{ ++$index }}</td>
                                        <td>{{ $download->title }}</td>
                                        <td>
                                           <form action="/webdownload/{{ $download->id }}" method="post">
                                               @csrf
                                               @method('delete')
                                               <a href="/webdownload/{{ $download->id }}/edit" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>
                                               <button type="submit" class="btn btn-danger btn-sm"> <i class="fas fa-trash-alt"></i></button>
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