@extends('backend.app')
@section('title')
    Courses
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/webblog/create" class="btn btn-info btn-sm">New Blog</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped" id="datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($blogs as $index => $blog)
                                    <tr>
                                        <td>{{ ++$index }}</td>
                                        <td>{{ $blog->title }}</td>
                                        <td>{!! Str::limit($blog->description,'60') !!}</td>
                                        <td>
                                           <form action="/webblog/{{ $blog->id }}" method="post">
                                               @csrf
                                               @method('delete')
                                               <a href="/webblog/{{ $blog->id }}/edit" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>
                                               <a href="/webblog/{{ $blog->id }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
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