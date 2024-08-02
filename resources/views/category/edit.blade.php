@extends('layout.app')
@section('title','Edit Kategori')


@section('content')
<form action="{{ route('category.update', $edit->id) }}" method="post">
    @csrf
    @method('PUT');
    <div class="from-group">
        <label for="">Nama Kategori</label>
        <input type="text" name="category_name" class="form-control" value="{{ $edit->category_name }}">
    </div>
    <div class="from-group">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{url()->previous()}}">Kembali</a>
    </div>
</form>
@endsection
