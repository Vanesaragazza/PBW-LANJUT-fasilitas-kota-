@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2>Detail Kategori</h2>
    <div class="card">
        <div class="card-body">
            <p><strong>ID:</strong> {{ $category->id }}</p>
            <p><strong>Nama Kategori:</strong> {{ $category->name }}</p>
            <p><strong>Deskripsi:</strong> {{ $category->description ?? '-' }}</p>
            <p><strong>Waktu Dibuat:</strong> {{ $category->created_at }}</p>
        </div>
    </div>
    <a href="{{ route('categories.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection