@extends('layout.app')
@section('title','Tambah Buku')

@section('content')
<form action="{{ route('book.store') }}" method="post">
    @csrf
    <div class="from-group">
        <label for="">Kategori Buku :</label>
        <select name="category_id" id="" class="form-control">
            <option value="">Pilih Kategori</option>
            @foreach ($categories as $category )
                <option value="{{$category->id}}">{{$category->category_name}}</option>
            @endforeach
        </select>
    </div>
    <div class="from-group">
        <label for="">Judul :</label>
        <input type="text" name="judul" class="form-control">
    </div>
    <div class="from-group">
        <label for="">Jumlah :</label>
        <input type="text" name="jumlah" class="form-control">
    </div>
    <div class="from-group">
        <label for="">Penerbit :</label>
        <input type="text" name="penerbit" class="form-control">
    </div>
    <div class="from-group">
        <label for="">Tahun Terbit :</label>
        <input type="text" name="tahun_terbit" class="form-control">
    </div>
    <div class="from-group">
        <label for="">Penulis :</label>
        <input type="text" name="penulis" class="form-control">
    </div>

    <div class="from-group">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>
@endsection
