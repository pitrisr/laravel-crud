@extends('layouts.admin')

@section('content')
    <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title">Edit Dosen</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="/dosen/{{ $dosen->id }}/update" method="POST">
            {{ csrf_field() }}
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Input Nama</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Nama"
                        value="{{ $dosen->name }}">
                </div>
                <div class="form-group">
                    <label for="gender">Jenis Kelamin</label>
                    <input type="text" name="gender" class="form-control" placeholder="Ex: Perempuan"
                        value="{{ $dosen->gender }}">
                </div>
                <div class="form-group">
                    <label for="address">Alamat</label>
                    <textarea name="address" id="floatingTextArea" class="form-control" placeholder="Enter Alamat"
                        value="{{ $dosen->address }}"></textarea>>
                </div>
                <div class="form-group">
                    <label for="educationlevel">Pendidikan</label>
                    <input type="text" name="education" class="form-control" placeholder="Ex: Strata 2"
                        value="{{ $dosen->educationlevel }}">
                </div>
                <div class="form-group">
                    <label for="phone">Telepon</label>
                    <input type="number" name="phone" class="form-control" placeholder="Ex: 081123456789"
                        value="{{ $dosen->phone }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                        placeholder="cont: example@gmail.com" value="{{ $dosen->email }}">
                </div>
            </div>
            <!-- /.card-body -->
            <div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-warning">Update</button>
                </div>
            </div>
        </form>
    </div>
@endsection
