@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Potongan</h1>
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
                <div class="card-header">Potongan</div>
                <div class="card-body">
                    <form action="{{route('potongan.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Masukan Kode </label>
                            <input type="number" name="kode" class="form-control @error('kode') is-invalid @enderror">
                            @error('kode')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                            <label for="">Masukan pengurangan </label>
                            <input type="text" name="pengurangan" class="form-control @error('pengurangan') is-invalid @enderror">
                            
                            @error('pengurangan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
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