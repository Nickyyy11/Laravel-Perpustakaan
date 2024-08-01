<form action="{{ route('store_kali') }}" method="post">
    @csrf
    <div class="form-group">
        <label for="">Angka 1:</label>
        <input type="text" name="angka1">
    </div>
    <div class="form-group">
        <label for="">Angka 2:</label>
        <input type="text" name="angka2">
    </div>
    <div class="form-group">
        <button type="submit">Hasil</button>
    </div>
</form>
<H1>jumlah adalah : {{ $jumlah }}</H1>
