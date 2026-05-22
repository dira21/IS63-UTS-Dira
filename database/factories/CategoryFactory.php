<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;


class CategoryFactory extends Factory
{
    public function definition(): array
    {
        $kategoris = [
            ['kode_kategori' => 'K001', 'nama_kategori' => 'Pistol'],
            ['kode_kategori' => 'K002', 'nama_kategori' => 'Rifle'],
            ['kode_kategori' => 'K003', 'nama_kategori' => 'Shotgun'],
            ['kode_kategori' => 'K004', 'nama_kategori' => 'Sniper'],
            ['kode_kategori' => 'K005', 'nama_kategori' => 'Submachine Gun'],
        ];

        $kategori = fake()->unique()->randomElement($kategoris);
        return [
            'kode_kategori' => $kategori['kode_kategori'],
            'nama_kategori' => $kategori['nama_kategori'],

        ];
    }
}
