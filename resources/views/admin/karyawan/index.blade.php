@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Data Karyawan</h1>
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
                    Data Karyawan
                    <a href="{{route('karyawan.create')}}" class="btn btn-outline-primary float-right">Tambah Data</a>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>No</th>
                            <th>Nik</th>
                            <th>Nama Depan</th>
                            <th>Nama Belakang</th>
                            <th>Jenis Kelamin</th>
                            <th>Jabatan</th>
                            <th>Kantor</th>
                            <th>Agama</th>
                            <th>Pendidikan</th>
                            <th>Alamat</th>
                            <th>Avatar</th>
                            <th>Gaji</th>
                            <th>Aksi</th>
                        </tr>
                        @php $no=1; @endphp
                        @foreach($karyawan as $data)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$data->nik}}</td>
                            <td>{{$data->nama_depan}}</td>
                            <td>{{$data->nama_belakang}}</td>
                            <td>{{$data->jenis_kelamin}}</td>
                            <td>{{$data->jabatan}}</td>
                            <td>{{$data->kantor}}</td>
                            <td>{{$data->agama}}</td>
                            <td>{{$data->pendidikan}}</td>
                            <td>{{$data->alamat}}</td>
                            <td>{{$data->avatar}}</td>
                            <td>{{$data->gaji}}</td>
                            <td>
                                <form action="{{route('karyawan.destroy',$data->id)}}" method="post">
                                    @method('delete')
                                    @csrf
                                    <a href="{{route('karyawan.edit',$data->id)}}" class="btn btn-outline-info">Edit</a>
                                    <a href="{{route('karyawan.show',$data->id)}}" class="btn btn-outline-warning">Show</a>
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