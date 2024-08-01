<h1>Edit User</h1>
<form action="{{ route('user.update', $edit->id) }}" method="post">
    @csrf
    @method('PUT');
    <div class="from-group">
        <label for="">Nama Lengkap</label>
        <input type="text" name="name" value="{{ $edit->name }}">
    </div>
    <div class="from-group">
        <label for="">Email</label>
        <input type="text" name="email" value="{{ $edit->email }}">
    </div>
    <div class="from-group">
        <label for="">Password</label>
        <input type="text" name="password">
    </div>
    <div class="from-group">
        <button type="submit">Simpan</button>
    </div>
</form>
