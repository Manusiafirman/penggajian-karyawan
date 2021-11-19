@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Data Jabatan</h1>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Data Jabatan
                    <a href="{{route('jabatan.create')}}" class="btn btn-outline-primary float-right">Tambah Data</a>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Nama Jabatan</th>
                            <th>Aksi</th>
                        </tr>
                        @php $no=1; @endphp
                        @foreach($jabatann as $data)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$data->kode}}</td>
                            <td>{{$data->nama}}</td>
                            <td>
                                <form action="{{route('jabatan.destroy',$data->id)}}" method="post">
                                    @method('delete')
                                    @csrf
                                    <a href="{{route('jabatan.edit',$data->id)}}" class="btn btn-outline-info">Edit</a>
                                    <a href="{{route('jabatan.show',$data->id)}}" class="btn btn-outline-warning">Show</a>
                                    <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin menghapus ini?');">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection