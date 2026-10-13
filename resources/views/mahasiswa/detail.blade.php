@extends('layouts.app')
@section('title', 'Detail Mahasiswa')
@section('content')
<h1>Detail Mahasiswa</h1>
<p>Nama: {{ $mahasiswa['nama'] }}</p>
<p>NIM: {{ $mahasiswa['nim'] }}</p>
<p>IPK: {{ number_format($mahasiswa['ipk'], 2) }}</p>
<a href="{{ route('mahasiswa.daftar') }}">
    Kembali ke Daftar Mahasiswa
</a>
@endsection
