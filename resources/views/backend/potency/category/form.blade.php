@extends('backend.layouts')
@section('title', $data ? 'Edit Category':'Tambah Category')
@section('content')
<div class="col-6">
    <div class="card card-outline card-teal">
        <div class="card-header">
            <h3 class="card-title">
                @yield('title')
            </h3>
        </div>        
        <div class="card-body">
            @if($data)
            {!! Form::open()->put()->route('category.update',[$data->id])->fill($data) !!}
            @else
            {!! Form::open()->post()->route('category.store') !!}
            @endif
        
            {!! Form::text('name', 'Nama')->sm()->required()->placeholder('Contoh: Laut') !!}

            {!! Form::submit('Simpan')->sm() !!}
            {!! Form::anchor('Batal')->sm()->danger()->route('category.index') !!}

            {!! Form::close() !!}
        </div>
    </div>
</div>    
@endsection