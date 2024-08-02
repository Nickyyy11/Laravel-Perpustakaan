@extends('layout.app')
@section('title','Tambah Kategori')

@section('content')
<form action="{{ route('category.store') }}" method="post">
    @csrf
    <div class="from-group">
        <label for="">Nama Kategori</label>
        <input type="text" name="category_name">
    </div>
    <div class="from-group">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>
@endsection
