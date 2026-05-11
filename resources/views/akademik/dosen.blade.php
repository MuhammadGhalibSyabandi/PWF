@extends('layouts.main')
@section('title', 'Data Dosen')
@section('navDosen', 'active')

@section('content')
<h1>Daftar Dosen Jurusan TI</h1>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>NIK</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Prodi</th>
        <th>Alamat</th>
    </tr>
    @foreach ($dosens as $dosen)
        <tr>
            <td>{{ $dosen->id }}</td>
            <td>{{ $dosen->nik }}</td>
            <td>{{ $dosen->nama }}</td>
            <td>{{ $dosen->email }}</td>
            <td>{{ $dosen->prodi }}</td>
            <td>{{ $dosen->alamat }}</td>
        </tr>
    @endforeach
</table>
@endsection