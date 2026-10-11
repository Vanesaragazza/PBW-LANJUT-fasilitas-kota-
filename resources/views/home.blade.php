@extends('layouts.app')

@section('title', 'Beranda - Fasilitas Kota')

@section('content')
<div class="row">
    <div class="col-md-12 mb-4">
        <div class="p-5 mb-4 bg-white rounded-3 shadow-sm border">
            <div class="container-fluid py-3">
                <h1 class="display-5 fw-bold text-primary">Sistem Informasi Fasilitas Kota</h1>
                <p class="col-md-8 fs-4 text-secondary">Platform terpadu untuk memantau, mengelola, dan melaporkan kondisi infrastruktur serta fasilitas umum kota dengan cepat dan transparan.</p>
            </div>
        </div>
    </div>

    <!-- Minimal dua card ringkasan sesuai tantangan nomor 3 -->
    <div class="col-md-6 mb-3">
        <div class="card shadow-sm border-primary">
            <div class="card-body">
                <h5 class="card-title text-primary">Total Laporan Aktif</h5>
                <p class="card-text display-6">3</p>
                <p class="text-muted small mb-0">Laporan fasilitas umum yang sedang ditinjau.</p>
            </div>
        </div>
    </div>
    
    <div class="col-md-6 mb-3">
        <div class="card shadow-sm border-success">
            <div class="card-body">
                <h5 class="card-title text-success">Fasilitas Selesai</h5>
                <p class="card-text display-6">1</p>
                <p class="text-muted small mb-0">Perbaikan infrastruktur yang telah tuntas.</p>
            </div>
        </div>
    </div>
</div>
@endsection