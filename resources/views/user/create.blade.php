<h1>Tambah User</h1>
<form action="{{ route('user.store') }}" method="post">
    @csrf
    <div class="from-group">
        <label for="">Nama Lengkap</label>
        <input type="text" name="name">
    </div>
    <div class="from-group">
        <label for="">Email</label>
        <input type="text" name="email">
    </div>
    <div class="from-group">
        <label for="">Password</label>
        <input type="text" name="password">
    </div>
    <div class="from-group">
        <button type="submit">Simpan</button>
    </div>
</form>
