@extends('backend.layouts')
@section('title','Dasboard')
@section('content')
<div class="col-12">
    {{-- <div class="card card-outline card-primary" id="card">
        <div class="card-header">
            <h3 class="card-title">@yield('title')</h3>
            <div class="card-tools">
                <a href="{{route('akun.create')}}" class="btn btn-primary btn-create btn-sm" data-toggle="tooltip" title="Tambah">
                    <i class="fa fa-plus"></i>
                </a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-sm table-bordered" id="table-bahan-pokok">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $row)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$row->code}}</td>
                        <td>{{$row->name}}</td>
                        <td>
                            <a href="{{route('akun.show',$row->id)}}" class="btn btn-info btn-sm" data-toggle="tooltip" title="Detail">
                                <i class="fa fa-search"></i>
                            </a>
                            <a href="{{route('akun.edit',$row->id)}}" class="btn btn-success btn-sm" data-toggle="tooltip" title="Edit">
                                <i class="fa fa-pen"></i>
                            </a>
                            <a href="{{route('akun.destroy',$row->id)}}" data-id="{{$row->id}}" class="btn btn-danger btn-sm destroy" data-toggle="tooltip" title="Hapus">
                                <i class="fa fa-times"></i>
                            </a>
                        </td>
                    </tr>                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div> --}}
</div>
@endsection
          