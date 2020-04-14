@extends('backend.layouts')
@section('title', 'Detail User')
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
                    <strong>Nama</strong>
                </div>
                <div class="col-8">: {{$data->name}}</div>
                <div class="col-4">
                    <strong>Email</strong>
                </div>
                <div class="col-8">: {{$data->email}}</div>
                <div class="col-12 mt-3">
                    <a href="{{route('admin.user.index')}}" class="btn btn-default btn-sm ">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>    
@endsection