@extends('layouts.main')

@section('title', 'Tambah Mahasiswa')

@section('content')
<h1>Tambah Data Mahasiswa</h1>

<form action="/mahasiswa/store" method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label">NIM</label>
        <input type="text" name="nim" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Nama Lengkap</label>
        <input type="text" name="nama_lengkap" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Tempat Lahir</label>
        <input type="text" name="tempat_lahir" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Prodi</label>
        <select name="prodi" class="form-control">
            <option value="TRPL">TRPL</option>
            <option value="MI">MI</option>
            <option value="TK">TK</option>
            <option value="ANIMASI">ANIMASI</option>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Alamat</label>
        <textarea name="alamat" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-success">Simpan</button>
    <a href="/mahasiswa" class="btn btn-secondary">Kembali</a>
</form>
@endsection