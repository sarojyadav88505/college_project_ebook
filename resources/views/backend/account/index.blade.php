@extends('backend.app')
@section('title')
    Admins
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/webaccounts/create" class="btn btn-info btn-sm">Create Admin</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped" id="datatable">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Admin Name</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($user as $index => $user)
                                    <tr>
                                        <td>{{ ++$index }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        
                                        
                                        <td>
                                            <form action="/webaccounts/{{ $user->id }}" method="post">
                                                @csrf
                                            <a href="/webaccounts/{{ $user->id }}/edit" class="btn btn-warning btn-sm"><i class="far fa-edit"></i></a>                                                
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