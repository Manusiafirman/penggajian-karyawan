@extends('layouts.admin')
@section('header')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-12">
                <h1 class="m-0">Data Potongan</h1>
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
                    Data Potongan
                    <a href="{{route('potongan.create')}}" class="btn btn-outline-primary float-right">Tambah Potongan</a>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>No</th>
                            <th>Kode</th>
                            <th>Pengurangan</th>
                            <th>Aksi</th>
                        </tr>
                        @php $no=1; @endphp
                        @foreach($potongann as $data)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$data->kode}}</td>
                            <td>{{$data->pengurangan}}</td>
                            <td>
                                <form action="{{route('potongan.destroy',$data->id)}}" method="post">
                                    @method('delete')
                                    @csrf
                                    <a href="{{route('potongan.edit',$data->id)}}" class="btn btn-outline-info">Edit</a>
                                    <a href="{{route('potongan.show',$data->id)}}" class="btn btn-outline-warning">Show</a>
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