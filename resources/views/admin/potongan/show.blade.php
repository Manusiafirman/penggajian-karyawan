@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Show Data Potongan</h1>
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
                <div class="card-header">Data Potongan</div>
                <div class="card-body">
                        <div class="form-group">
                            <label for="">Kode Potongan</label>
                            <input type="text" name="kode" value="{{$potongan->kode}}" class="form-control" readonly>
                            <label for="">Pengurangan</label>
                            <input type="text" name="pengurangan" value="{{$potongan->pengurangan}}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <a href="{{url('/potongan')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection