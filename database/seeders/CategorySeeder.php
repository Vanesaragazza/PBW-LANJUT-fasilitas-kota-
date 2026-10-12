<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
    DB::table('categories')->insert([
        ['name' => 'Jalan', 'description' => 'Jalan dan trotoar'],
        ['name' => 'Penerangan', 'description' => 'Lampu penerangan jalan'],
        ['name' => 'Drainase', 'description' => 'Saluran air dan drainase'],
         ['name' => 'Kebersihan', 'description' => 'fasilitas-kebersihan'],
        ['name' => 'Taman', 'description' => 'Taman dan ruang publik'],
    ]);
    
    }
}
