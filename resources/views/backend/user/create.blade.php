@extends('backend.layouts')
@section('title', 'Tambah User')
@section('content')
<div class="col-md-6">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">
                @yield('title')
            </h3>
        </div>        
        <div class="card-body">
            <form action="{{route('admin.user.store')}}" method="POST">
                @csrf
                <div class="row">                    
                    <div class="col-12">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="name" class="form-control form-control-sm" required="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control form-control-sm" required="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="text" name="password" class="form-control form-control-sm" required="">
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        <a href="{{route('admin.user.index')}}" class="btn btn-default btn-sm ">Batal</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>    
@endsection