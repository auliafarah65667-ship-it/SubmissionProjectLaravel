@extends('layouts.app')

@section('title', 'Detail Mahasiswa')

@section('content')
    <h1>Detail Mahasiswa</h1>

    <p>Nama: {{ $mahasiswa['nama'] }}</p>
    <p>NIM: {{ $mahasiswa['nim'] }}</p>
    <p>IPK: {{ number_format($mahasiswa['ipk'], 2, ',', '.') }}</p>

    @if ($mahasiswa['ipk'] >= 3.5)
        <p>Keterangan: Cum Laude</p>
    @elseif ($mahasiswa['ipk'] >= 3.0)
        <p>Keterangan: Baik</p>
    @else
        <p>Keterangan: Perlu ditingkatkan</p>
    @endif

    <a href="{{ route('mahasiswa.daftar') }}">
        Kembali ke daftar mahasiswa
    </a>
@endsection
