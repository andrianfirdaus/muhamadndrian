@extends('layouts.app')

@section('content')
    <div class="container flex-grow-1">
        <div class="row justify-content-center">
            <h2>Selamat Datang</h2>
            <p class="text-muted">Ini halaman utama web profile mahasiswa prodi SI UNPAM</p>
            <a href="{{ url('/profile') }}" class="btn btn-primary">Lihat Profile</a>
        </div>
    </div> 
    @endselection
