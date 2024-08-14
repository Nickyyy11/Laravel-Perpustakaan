@extends('layout.app')
@section('title', 'Form Borrow')
@section('content')
    <form action="{{ route('pinjam.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col col-sm-6">
                <div class="form-group row">
                    <div class="col col-sm-3">
                        <label for="">Kode Transaksi</label>
                    </div>
                    <div class="col col-sm-6">
                        <input type="text" name="transaction_code" id="" class="form-control" readonly>
                    </div>

                </div>
                <div class="form-group row">
                    <div class="col col-sm-3">
                        <label for="">Nama Member</label>
                    </div>
                    <div class="col col-sm-6">
                        <select name="" id="" class="form-control">
                            <option value="">-- Pilih Member --</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col col-sm-3">
                        <label for="">Tanngal Peminjaman</label>
                    </div>
                    <div class="col col-sm-6">
                        <input type="date" class="form-control" name="" id="">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col col-sm-3">
                        <label for="">Tanggal Kembali</label>
                    </div>
                    <div class="col col-sm-6">
                        <input type="date" class="form-control" name="" id="">
                    </div>
                </div>
            </div>
            <div class="col col-sm-6"></div>
        </div>
        <div class="form-group row">
            <div class="col col-sm-2">
                <label for="">Kategori Buku</label>
            </div>
            <div class="col col-sm-4">
                <select name="category_id" class="form-group" id="category_id">
                    <option value="">Pilih Kategori</option>
                    @foreach ($categories as $cat)
                    <option value="{{$cat->id}}">{{$cat->category_name}}</option>

                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <div class="col col-sm-2">
                <label for="">Judul Buku</label>
            </div>
            <div class="col col-sm-4">
                <select name="buku_id" id="buku_id" class="form-group">
                    <option value="">Pilih Judul Buku</option>

                </select>
                <input type="hidden" id="nama_penerbit">
            </div>
        </div>
        <div class="form-group">
            <div align="right">
                <button type="button" class="btn btn-primary" id="tambah-row">Tambah Row</button>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul Buku</th>
                        <th>Penerbit</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-sm mr-2">
                Save
            </button>
            <a href="{{ url()->previous() }}">Back</a>
        </div>
    </form>
@endsection
