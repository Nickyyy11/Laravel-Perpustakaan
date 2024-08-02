@extends('layout.app')
@section('title','Data Kategori')
@section('content')

<div align="right">
    <a href="{{ route('category.create') }}" class="btn btn-primary">Tambah data</a>
</div>


<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Kategori</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($datas as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->category_name }}</td>
                <td><a href="{{ route('category.edit', $data->id) }}" class="btn btn-success btn-xs">Edit</a>
                    <form action="{{ route('category.destroy', $data->id) }}" method="post">
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
