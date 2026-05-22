<?php

namespace Database\Factories;

use App\Models\Weapon;
use Illuminate\Database\Eloquent\Factories\Factory;

class SenjataFactory extends Factory
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
        $supplier = [
            ['kode_supplier' => 'S001', 'nama_supplier' => 'Supplier A'],
            ['kode_supplier' => 'S002', 'nama_supplier' => 'Supplier B'],
            ['kode_supplier' => 'S003', 'nama_supplier' => 'Supplier C'],
        ];

        return [
            'kode_senjata' => 'SNJ' . fake()->unique()->numerify('###'),
            'nama_senjata' => fake()->word(),
            'kategori_id' => fake()->randomElement($kategoris)['kode_kategori'],
            'supplier_id' => fake()->randomElement($supplier)['kode_supplier'],
            'sku' => 'SKU' . fake()->unique()->numerify('######'),
            'stok' => fake()->numberBetween(1, 100),
            'harga' => fake()->numberBetween(100000, 1000000),
            'status' => fake()->randomElement(['Tersedia', 'Habis']),
            'deskripsi' => fake()->sentence(),
        ];
    }
}
