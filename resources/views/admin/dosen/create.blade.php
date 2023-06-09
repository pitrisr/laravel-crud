@extends('layouts.admin')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Add Dosen</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ url('/dosen/store') }}" method="POST">
            {{ csrf_field() }}
            <div class="card-body">
                <div class="form-group">
                    <label for="name">Input Nama</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Nama">
                </div>
                <div class="form-group">
                    <label for="gender">Jenis Kelamin</label>
                    <input type="text" name="gender" class="form-control" placeholder="Ex: Perempuan">
                </div>
                <div class="form-group">
                    <label for="address">Alamat</label>
                    <textarea name="address" id="floatingTextArea" class="form-control" placeholder="Enter Alamat"></textarea>>
                </div>
                <div class="form-group">
                    <label for="educationlevel">Pendidikan</label>
                    <input type="text" name="education" class="form-control" placeholder="Ex: Strata 2">
                </div>
                <div class="form-group">
                    <label for="phone">Telepon</label>
                    <input type="number" name="phone" class="form-control" placeholder="Ex: 081123456789">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                        placeholder="cont: example@gmail.com">
                </div>
            </div>
            <!-- /.card-body -->
            <div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
