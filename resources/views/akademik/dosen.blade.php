@extends('layouts.main')
@section('title', 'Data Dosen')
@section('navDosen', 'active')

@section('content')
<h1>Daftar Dosen Jurusan TI</h1>
<a href="/dosen/create" class="btn btn-primary mb-3">+ Tambah Data</a>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>NIK</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Prodi</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
    @foreach ($dosens as $dosen)
        <tr>
            <td>{{ $dosen->id }}</td>
            <td>{{ $dosen->nik }}</td>
            <td>{{ $dosen->nama }}</td>
            <td>{{ $dosen->email }}</td>
            <td>{{ $dosen->prodi }}</td>
            <td>{{ $dosen->alamat }}</td>
            <td>
                <form action="/dosen/delete/{{ $dosen->id }}" method="POST">@csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    <a href="/dosen/edit/{{ $dosen->id }}" class="btn btn-warning btn-sm">Edit</a>
                </form>
            </td>
        </tr>
    @endforeach
</table>
<div class="mt-3">
    {{ $dosens->links() }}
</div>  
@endsection