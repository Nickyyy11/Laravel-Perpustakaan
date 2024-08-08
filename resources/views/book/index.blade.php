@extends('layout.app')
@section('title','Data Buku')
@section('content')

<div align="right">
    <a href="{{ route('book.create') }}" class="btn btn-primary">Tambah</a>
</div>


<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>kategori</th>
            <th>judul</th>
            <th>penerbit</th>
            <th>tahun terbit</th>
            <th>penulis</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($datas as $key => $data)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $data->category->category_name }}</td>
                <td>{{ $data->judul }}</td>
                <td>{{ $data->penerbit}}</td>
                <td>{{ $data->tahun_terbit }}</td>
                <td>{{ $data->penulis }}</td>
                <td><a href="{{ route('book.edit', $data->id) }}" class="btn btn-success btn-xs">Edit</a> |
                    <form action="{{ route('book.destroy', $data->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm ('apakah anda ingin menghapus data?')"
                            type="submit" class="btn btn-danger btn-xs">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
