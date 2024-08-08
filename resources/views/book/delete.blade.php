@extends('layout.app')
@section('title')

@section('content')
<h1>Data Kategori</h1>
<div align="right">
    <a href="{{ route('category.destroy') }}">Tambah Kategori</a>
</div>


<table border="1" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($datas as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->category_name }}</td>
                <td><a href="{{ route('category.edit', $data->id) }}">Edit</a>
                    <a href="{{ route('category.destroy', $data->id) }}"
                        onclick="return confirm ('apakah anda ingin menghapus data?')">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
