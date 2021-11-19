@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Show Data Karyawan</h1>
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
                <div class="card-header">Data Karyawan</div>
                <div class="card-body">
                        <div class="form-group">
                            <label for="">Nik</label>
                            <input type="text" name="nik" value="{{$karyawan->nik}}" class="form-control" readonly>
                            <label for="">Nama Depan</label>
                            <input type="text" name="nama_depan" value="{{$karyawan->nama_depan}}" class="form-control" readonly>
                            <label for="">Nama Belakang</label>
                            <input type="text" name="nama_belakang" value="{{$karyawan->nama_belakang}}" class="form-control" readonly>
                            <label for="">Jenis Kelamin</label>
                            <input type="text" name="jenis_kelamin" value="{{$karyawan->jenis_kelamin}}" class="form-control" readonly>
                            <label for="">Jabatan</label>
                            <input type="text" name="jabatan" value="{{$karyawan->jabatan}}" class="form-control" readonly>
                            <label for="">Kantor</label>
                            <input type="text" name="kantor" value="{{$karyawan->kantor}}" class="form-control" readonly>
                            <label for="">Agama</label>
                            <input type="text" name="agama" value="{{$karyawan->agama}}" class="form-control" readonly>
                            <label for="">Pendidikan</label>
                            <input type="text" name="pendidikan" value="{{$karyawan->pendidikan}}" class="form-control" readonly>
                            <label for="">Alamat</label>
                            <input type="text" name="alamat" value="{{$karyawan->alamat}}" class="form-control" readonly>
                            <label for="">Avatar</label>
                            <input type="text" name="avatar" value="{{$karyawan->avatar}}" class="form-control" readonly>
                            <label for="">Gaji</label>
                            <input type="text" name="gaji" value="{{$karyawan->gaji}}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <a href="{{url('/karyawan')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection