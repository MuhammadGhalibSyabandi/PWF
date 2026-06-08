@extends('layouts.main')
@section('title', 'Dashboard')

@section('content')
    @if (session('role') === 'admin')
        <h1>Halo Admin! Selamat Datang di Dashboard</h1>
    @endif
    @if (session('role') === 'user')
        <h1>Halo User! Selamat Datang di Dashboard</h1>
    @endif
@endsection
