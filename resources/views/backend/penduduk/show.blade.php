@extends('backend.layouts')
@section('title', 'Detail Penduduk')
@section('content')
<div class="col-md-6">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">
                @yield('title')
            </h3>
        </div>        
        <div class="card-body">
            <div class="row">
                <div class="col-4">
                    <strong>NIK</strong>
                </div>
                <div class="col-8">: {{$data->nik}}</div>
                <div class="col-4">
                    <strong>Nama</strong>
                </div>
                <div class="col-8">: {{$data->nama}}</div>
                <div class="col-4">
                    <strong>Tempat Lahir</strong>
                </div>
                <div class="col-8">: {{$data->tempat_lahir}}</div>
                <div class="col-4">
                    <strong>Tanggal Lahir</strong>
                </div>
                <div class="col-8">: {{$data->tanggal_lahir}}</div>
                <div class="col-4">
                    <strong>Jenis Kelamin</strong>
                </div>
                <div class="col-8">: {{$data->jenis_kelamin}}</div>
                <div class="col-4">
                    <strong>Alamat</strong>
                </div>
                <div class="col-8">: {{$data->alamat}}</div>
                <div class="col-12 mt-3">
                    <a href="{{route('admin.penduduk.index')}}" class="btn btn-default btn-sm ">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>    
@endsection