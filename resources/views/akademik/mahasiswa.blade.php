@extends('layouts.main')
@section('title')

@section('content')
<h1>Daftar Mahasiswa Jurusan TI</h1>
<a href="/mahasiswa/create" class="btn btn-primary mb-3">+ Tambah Data</a>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
    @foreach ($mahasiswas as $mahasiswa)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $mahasiswa->nim }}</td>
            <td>{{ $mahasiswa->nama_lengkap }}</td>
            <td>{{ $mahasiswa->email }}</td>
            <td>{{ $mahasiswa->alamat }}</td>
            <td>
                <form action="/mahasiswa/delete/{{ $mahasiswa->id }}" method="POST">@csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    <a href="/mahasiswa/edit/{{ $mahasiswa->id }}" class="btn btn-warning btn-sm">Edit</a>
                </form>
            </td>
        </tr>
    @endforeach
</table>
<div class="mt-3">
    {{ $mahasiswas->links() }}
</div>
@endsection

