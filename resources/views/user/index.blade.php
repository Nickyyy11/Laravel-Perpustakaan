<h1>Data User</h1>
<div align="right">
    <a href="{{ route('user.create') }}">Tambah User</a>
</div>


<table border="1" width="100%">
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
                <td><a href="{{ route('user.edit', $user->id) }}">Edit</a>
                    <form action="{{ route('user.destroy', $user->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm ('apakah anda ingin menghapus data?')"
                            type="submit">Hapus</button>
                    </form>

                </td>
            </tr>
        @endforeach
    </tbody>
</table>
