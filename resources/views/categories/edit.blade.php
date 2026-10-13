@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2>Edit Kategori</h2>

    {{-- Form mengarah ke route update dengan mengirimkan ID kategori --}}
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT') {{-- Wajib ada untuk method PUT/PATCH di Laravel --}}

        <div class="mb-3">
            <label for="name" class="form-label">Nama Kategori</label>
            {{-- value="$category->name" digunakan untuk menampilkan data lama di input --}}
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $category->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $category->description) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection