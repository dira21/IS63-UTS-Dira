<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    public function run(): void
    {
        if (Category::count() === 0) {
            $this->command->warn('CategorySeeder harus dijalankan lebih dulu!');
            return;
        }

        $suppliers = [
            ['kode_supplier' => 'SUP001', 'nama_supplier' => 'PT. Senjata Nusantara', 'kontak' => '021-12345678', 'status' => 'aktif'],
            ['kode_supplier' => 'SUP002', 'nama_supplier' => 'CV. Senjata Jaya', 'kontak' => '022-87654321', 'status' => 'aktif'],
            ['kode_supplier' => 'SUP003', 'nama_supplier' => 'PT. Senjata Abadi', 'kontak' => '031-11223344', 'status' => 'aktif'],
        ];

        foreach ($suppliers as $supplier) {
            Supplier::create($supplier);
        }
    }
}
