@extends('layout.app')
@section('title','Data Pinjam')
@section('content')

<div align="right">
    <a href="{{ route('pinjam.create') }}" class="btn btn-primary">Tambah data</a>
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
                <td>{{ $data->pinjam_name }}</td>
                <td><a href="{{ route('pinjam.edit', $data->id) }}" class="btn btn-success btn-xs">Edit</a>
                    <form action="{{ route('pinjam.destroy', $data->id) }}" method="post">
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
