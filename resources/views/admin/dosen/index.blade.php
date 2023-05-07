@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="card-header">
            <h3 class="card-title">Data Dosen</h3>

            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>Education Level</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dosen as $item)
                        <tr>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->gender }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->educationlevel }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->email }}</td>
                            <td><a href="/dosen/{{ $item->id }}/delete" class='btn btn-danger'
                                    onclick="return confirm('Are you sure  want to delete this Data?')">Delete</a>
                                <a href="/dosen/{{ $item->id }}/edit" class="btn btn-warning">Edit</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    @endsection
</div>
