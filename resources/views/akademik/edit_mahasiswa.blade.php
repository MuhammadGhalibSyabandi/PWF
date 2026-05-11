@extends('layouts.main')

@section('title','Edit Mahasiswa')

@section('content')
<h1>Edit Data Mahasiswa</h1>

<form action="/mahasiswa/update/{{ $mahasiswa->id }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>NIM</label>
        <input type="text" name="nim" class="form-control" value="{{ $mahasiswa->nim }}">
    </div>

    <div class="mb-3">
        <label>Nama Lengkap</label>
        <input type="text" name="nama_lengkap" class="form-control" value="{{ $mahasiswa->nama_lengkap }}">
    </div>

    <div class="mb-3">
        <label>Tempat Lahir</label>
        <input type="text" name="tempat_lahir" class="form-control" value="{{ $mahasiswa->tempat_lahir }}">
    </div>

    <div class="mb-3">
        <label>Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" class="form-control" value="{{ $mahasiswa->tgl_lahir }}">
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="{{ $mahasiswa->email }}">
    </div>

    <div class="mb-3">
        <label>Prodi</label>
        <select name="prodi" class="form-select">
            <option value="TRPL" {{ $mahasiswa->prodi == 'TRPL' ? 'selected' : '' }}>TRPL</option>
            <option value="MI" {{ $mahasiswa->prodi == 'MI' ? 'selected' : '' }}>MI</option>
        </select>
    </div>

    <div class="mb-3">
        <label>Alamat</label>
        <textarea name="alamat" class="form-control">{{ $mahasiswa->alamat }}</textarea>
    </div>

    <button type="submit" class="btn btn-success">Update</button>
    <a href="/mahasiswa" class="btn btn-secondary">Kembali</a>
</form>
@endsection