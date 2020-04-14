@extends('backend.layouts')
@section('title', $data ? 'Edit Potency':'Tambah Potency')
@section('content')
<div class="col-12">
    <div class="card card-outline card-teal">
        <div class="card-header">
            <h3 class="card-title">
                @yield('title')
            </h3>
        </div>        
        <div class="card-body">
            @if($data)
            {!! Form::open()->put()->route('potency.update',[$data->id])->fill($data)->multipart() !!} {{-- UPDATE DATA --}}
            @else
            {!! Form::open()->post()->route('potency.store')->multipart() !!} {{-- STORING DATA --}}
            @endif
            <div class="row">
                <div class="col-12">
                    {{-- {!! Form::file($name, [$options]) !!} --}}
                    <div class="form-group">
                        <label for="">Image</label>
                        <div class="input-images"></div>
                        {{-- <input name="file" type="file" class="form-control dropzone" multiple /> --}}
                    </div>

                </div>
                <div class="col-6">
                    {!! Form::select('category_id', 'Kategori', App\Model\Potency\Category::get())->sm()->required()->id('category_id') !!}                    
                </div>
                <div class="col-6">
                    {!! Form::text('name', 'Nama')->sm()->required()->placeholder('Contoh: Cokelat') !!}
                </div>
                <div class="col-12">
                    {!! Form::textarea('description', "Deskripsi")->id('description') !!}
                </div>                
            </div>

            {!! Form::submit('Simpan')->sm() !!}
            {!! Form::anchor('Batal')->sm()->danger()->route('potency.index') !!}

            {!! Form::close() !!}
        </div>
    </div>
</div>    
@endsection
@push('styles')
<link rel="stylesheet" href="{{asset('backend/plugins/image-uploader/image-uploader.min.css')}}">    
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/min/dropzone.min.css"> --}}
@endpush
@push('scripts')
<script src="{{asset('backend/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="{{asset('backend/plugins/image-uploader/image-uploader.min.js')}}"></script>
<script src="{{asset('backend/plugins/ckeditor/ckeditor.js')}}"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/dropzone.min.js"></script> --}}
<script>
$(document).ready(async function(){
    let data = null;
    let preloaded = [];

    @if($data)
    data = await $.getJSON(`{{url('potency/potency/'.$data->id)}}`);
    data = data.data;
    let images = JSON.parse(data.images);
    // let id = 0;
    preloaded = images.map((val,index)=>{
        return {
            id: index, 
            src: val.link
        }
    })
    
    @endif

    $('#category_id').select2();

    $('.input-images').imageUploader({
        preloaded: preloaded,
        imagesInputName: 'image',
        maxSize: 0.5 * 1024 * 1024,
        maxFiles: 5
    });
    // $('input[type="file"]').dropzone();

    CKEDITOR.replace('description');    
});
</script>    
@endpush