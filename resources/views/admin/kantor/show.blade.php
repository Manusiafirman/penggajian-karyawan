@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Show Data kantor</h1>
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
                <div class="card-header">Data Kantor</div>
                <div class="card-body">
                        <div class="form-group">
                        <label for="">Kode Karyawan</label>
                            <input type="text" name="kode" value="{{$kantorr->kode}}" class="form-control" readonly>
                            <label for="">Nama Karyawan</label>
                            <input type="text" name="nama" value="{{$kantorr->nama}}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <a href="{{url('/kantor')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection