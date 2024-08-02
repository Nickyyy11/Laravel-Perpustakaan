@extends('layout.app')
@section('title','Data User')
@section('content')

<div align="right">
    <a href="{{ route('user.create') }}" class="btn btn-primary">Tambah User</a>
</div>


<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td><a href="{{ route('user.edit', $user->id) }}" class="btn btn-success">Edit</a>
                    <form action="{{ route('user.destroy', $user->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm ('apakah anda ingin menghapus data?')"
                            type="submit" class="btn btn-danger">Hapus</button>
                    </form>

                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
