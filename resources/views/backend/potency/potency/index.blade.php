@extends('backend.layouts')
@section('title','Potensi Desa')
@section('content')
<div class="col-12">
    <div class="card card-outline card-teal">
        <div class="card-header">
            <h3 class="card-title">
                @yield('title')
            </h3>
            <div class="card-tools">
                <a href="{{route('potency.create')}}" class="btn btn-primary btn-create btn-sm" data-toggle="tooltip" title="Tambah">
                    <i class="fa fa-plus"></i>
                </a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-sm table-bordered table-striped" id="potency-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Gambar</th>
                        <th>Nama</th>
                        <th>Kategori</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>    
@endsection
@push('scripts')
<script src="{{asset('backend/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<script>
$(document).ready(function(){
    $.fn.dataTable.ext.errMode = 'throw';
    const $table = $('#potency-table').DataTable({
        processing: true,
        serverSide: true,
        responsive: true,
        ajax: {
            url : '{!! route("potency.source") !!}',
            dataSrc: 'data'
        },
        columns: [  
            {data: 'DT_RowIndex', name: 'DT_RowIndex',width:"2%", orderable : false, searchable : false, className: 'text-center'},
            {data: 'images', name: 'images',width:"5%", orderable : false},
            {data: 'name', name: 'name',width:"5%", orderable : false},
            {data: 'category', name: 'category',width:"5%", orderable : false},
            {data: 'action', name: 'action',width:"2%", searchable : false, orderable : false, className: 'text-center'}
        ],
        search: {
            "regex": true
        }
    });

    $(document).on('click','a.destroy',function(e){
        e.preventDefault();
        let data_id = $(this).data('id');
        
        let url = `{{url('potency/potency/${data_id}')}}`;
        
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "You won't be able to revert this!",
            type: 'question',
            showCancelButton: true,
            // confirmButtonColor: '#3085d6',
            // cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus Data Ini',
            cancelButtonText: 'Batal'
        })
        .then((result) => {
            if (result.value) {                
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url:url,
                    method: 'DELETE',
                    beforeSend: function(data){
                        $('.card').append(`<div class="overlay"><i class="fa fa-sync-alt fa-5x fa-spin"></i></div>`);
                    },
                    complete: function(data){
                        $('.overlay').remove();
                    },
                    success: function(data){
                        Swal.fire(
                            '200',
                            'Data berhasil dihapus',
                            'success'
                        ).then(result=> $table.ajax.reload() )
                        
                    },
                    error: function(data){                        
                        Swal.fire(
                            '500',
                            'Maaf Terjadi Kesalahan Sistem, Coba Beberapa saat lagi',
                            'error'
                        )
                    }
                })
            }
        })            
    })
});
</script>    
@endpush