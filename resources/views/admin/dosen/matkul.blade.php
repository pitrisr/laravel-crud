@extends('layouts.admin')

@section('content')
    <div class="content">
        <div class="card-header">
            <h3 class="card-title">Data Dosen</h3>

            <div class="card-tools">
                <form action="/dosen/search" class="form-inline" method="GET">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="search" name="search" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>
                <tr>
                    <th>Nama Mata Kuliah </th>
                    <th>Kode Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Nama Dosen</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($matkul as $matkul)
                    <tr>
                        <td>{{ $matkul->nama_mk }}</td>
                        <td>{{ $matkul->kode_mk }}</td>
                        <td>{{ $matkul->sks }}</td>
                        <td>
                            @foreach ($matkul->dosen as $ds)
                                {{ $ds->name }},
                            @endforeach
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
</div>
