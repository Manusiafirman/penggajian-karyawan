@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Edit Data Karyawan</h1>
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
                <div class="card-header">Data Edit Karyawan</div>
                <div class="card-body">
                    <form action="{{route('karyawan.update', $karyawan->id)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="">Masukan Nik</label>
                            <input type="text" name="nik" value="{{$karyawan->nik}}" class="form-control @error('nik') is-invalid @enderror">
                            @error('nik')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$massage}}</strong>
                            </span>
                            @enderror
                            <label for="">Nama Depan </label>
                            <input type="text" name="nama_depan" value="{{$karyawan->nama_depan}}" class="form-control @error('nama_depan') is-invalid @enderror">
                            @error('nama_depan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$massage}}</strong>
                            </span>
                            @enderror
                            <label for="">Nama Belakang </label>
                            <input type="text" name="nama_belakang" value="{{$karyawan->nama_belakang}}" class="form-control @error('nama_belakang') is-invalid @enderror">
                            @error('nama_belakang')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$massage}}</strong>
                            </span>
                            @enderror
                            <label for="">Jenis Kelamin </label>
                            <input type="text" name="jenis_kelamin" value="{{$karyawan->jenis_kelamin}}" class="form-control @error('jenis_kelamin') is-invalid @enderror">
                            @error('jenis_kelamin')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$massage}}</strong>
                            </span>
                            @enderror
                            <label for="">Jabatan </label>
                            <input type="number" name="jabatan" value="{{$karyawan->jabatan}}" class="form-control @error('jabatan') is-invalid @enderror">
                            @error('jabatan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$massage}}</strong>
                            </span>
                            @enderror
                            <label for="">Kantor </label>
                            <input type="number" name="kantor" value="{{$karyawan->kantor}}" class="form-control @error('kantor') is-invalid @enderror">
                            @error('kantor')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$massage}}</strong>
                            </span>
                            @enderror
                            <label for="">Agama </label>
                            <input type="text" name="agama" value="{{$karyawan->agama}}" class="form-control @error('agama') is-invalid @enderror">
                            @error('agama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$massage}}</strong>
                            </span>
                            @enderror
                            <label for="">Pendidikan </label>
                            <input type="text" name="pendidikan" value="{{$karyawan->pendidikan}}" class="form-control @error('pendidikan') is-invalid @enderror">
                            @error('pendidikan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$massage}}</strong>
                            </span>
                            @enderror
                            <label for="">Alamat </label>
                            <input type="text" name="kantor" value="{{$karyawan->kantor}}" class="form-control @error('kantor') is-invalid @enderror">
                            @error('kantor')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$massage}}</strong>
                            </span>
                            @enderror
                            <label for="">Avatar </label>
                            <input type="text" name="kantor" value="{{$karyawan->kantor}}" class="form-control @error('kantor') is-invalid @enderror">
                            @error('kantor')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$massage}}</strong>
                            </span>
                            @enderror
                            <label for="">Gaji </label>
                            <input type="text" name="gaji" value="{{$karyawan->gaji}}" class="form-control @error('gaji') is-invalid @enderror">
                            @error('gaji')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$massage}}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="reset" class="btn btn-outline-warning">Reset</button>
                            <button type="submit" class="btn btn-outline-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection