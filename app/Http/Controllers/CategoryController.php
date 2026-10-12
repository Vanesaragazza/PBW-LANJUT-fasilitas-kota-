<?php

namespace App\Http\Controllers;

// 1. Lakukan import Model dan Request di bagian atas (di bawah namespace)
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // ==========================================
    // Tulis method-method ini DI DALAM CLASS
    // ==========================================

    // Method untuk menampilkan daftar kategori (Read)
    public function index()
    {
    // Menggunakan latest() agar data terbaru otomatis berada di posisi paling atas
    $categories = Category::latest()->get(); 
    return view('categories.index', compact('categories'));
}

    // Method untuk menampilkan form tambah kategori
    public function create()
    {
        return view('categories.create');
    }

    // Method untuk memproses dan menyimpan data baru ke database (Create)
    public function store(Request $request)
    {
        Category::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('categories.index');
    }
}