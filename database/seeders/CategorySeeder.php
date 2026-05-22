<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['kode_kategori' => 'KTG001', 'nama_kategori' => 'Senapan', 'status' => 'aktif'],
            ['kode_kategori' => 'KTG002', 'nama_kategori' => 'Pistol', 'status' => 'aktif'],
            ['kode_kategori' => 'KTG003', 'nama_kategori' => 'Amunisi', 'status' => 'aktif'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
