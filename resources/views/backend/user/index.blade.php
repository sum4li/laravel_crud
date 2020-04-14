@extends('backend.layouts')
@section('title','Data Penduduk')
@section('content')
<div class="col-12">
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">
                @yield('title')
            </h3>
            <div class="card-tools">
                <a href="{{route('admin.user.create')}}" class="btn btn-primary btn-create btn-sm" data-toggle="tooltip" title="Tambah">
                    <i class="fa fa-plus"></i>
                </a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-sm table-bordered table-striped" id="user-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $row)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$row->name}}</td>
                        <td>{{$row->email}}</td>
                        <td>
                            <a href="{{route('admin.user.show',$row->id)}}" class="btn btn-sm btn-info" data-toggle="tooltip" title="Detail">
                                <i class="fa fa-search"></i>
                            </a>
                            <a href="{{route('admin.user.edit',$row->id)}}" class="btn btn-sm btn-success" data-toggle="tooltip" title="Edit">
                                <i class="fa fa-pen"></i>
                            </a>
                            <a href="{{route('admin.user.destroy',$row->id)}}" class="btn btn-sm btn-danger destroy" data-toggle="tooltip" title="Hapus">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>    
@endsection
@push('scripts')
<script src="{{asset('backend/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<script>
$(document).ready(function(){    
    $('#user-table').DataTable();

    $(document).on('click','a.destroy',function(e){
        e.preventDefault();
        let delete_url = $(this).attr('href');
        
        Swal.fire({
            title: 'Apakah Anda yakin?',
            // text: "You won't be able to revert this!",
            type: 'question',
            showCancelButton: true,
            // confirmButtonColor: '#3085d6',
            // cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus Data Ini',
            cancelButtonText: 'Batal'
        })
        .then((result) => {
            if (result.value) {                
                window.location.href = delete_url;
            }
        })            
    })
});
</script>    
@endpush