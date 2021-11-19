@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Data Pendapatan</h1>
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
                    Data Pendapatan
                    <a href="{{route('pendapatan.create')}}" class="btn btn-outline-primary float-right">Tambah Pendapatan</a>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>tunjangan</th>
                            <th>Aksi</th>
                        </tr>
                        @php $no=1; @endphp
                        @foreach($pendapatana as $data)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$data->kode}}</td>
                            <td>{{$data->tunjangan}}</td>
                            <td>
                                <form action="{{route('pendapatan.destroy',$data->id)}}" method="post">
                                    @method('delete')
                                    @csrf
                                    <a href="{{route('pendapatan.edit',$data->id)}}" class="btn btn-outline-info">Edit</a>
                                    <a href="{{route('pendapatan.show',$data->id)}}" class="btn btn-outline-warning">Show</a>
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