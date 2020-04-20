@extends('backend.layouts')
@section('title', 'Tambah Penduduk')
@section('content')
<div class="col-md-6">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">
                @yield('title')
            </h3>
        </div>        
        <div class="card-body">
            <form action="{{route('admin.penduduk.store')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label>NIK</label>
                            <input type="text" name="nik" class="form-control form-control-sm" required="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control form-control-sm" required="">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Tempat Lahir</label>
                            <input type="text" name="tempat_lahir" class="form-control form-control-sm" required="">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="date" name="tanggal_lahir" class="form-control form-control-sm" required="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group clearfix">
                            <label class="d-block">Jenis Kelamin</label>
                            <div class="icheck-primary">
                              <input type="radio" id="radioPrimary1" name="jenis_kelamin" value="laki-laki" checked="">
                              <label for="radioPrimary1">Laki - Laki</label>
                            </div>
                            <div class="icheck-danger">
                              <input type="radio" id="radioPrimary2" name="jenis_kelamin" value="perempuan">
                              <label for="radioPrimary2">Perempuan
                              </label>
                            </div>                            
                          </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control form-control-sm" cols="30" rows="3" required=""></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                        <a href="{{route('admin.penduduk.index')}}" class="btn btn-default btn-sm ">Batal</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>    
@endsection