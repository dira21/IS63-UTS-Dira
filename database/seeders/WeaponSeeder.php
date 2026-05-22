<?php

namespace Database\Seeders;

use App\Models\Weapon;
use App\Models\Category;
use App\Models\Supplier;
use Illuminate\Database\Seeder;

class WeaponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Category::count() === 0 || Supplier::count() === 0) {
            $this->command->warn('CategorySeeder dan SupplierSeeder harus dijalankan lebih dulu!');
            return;
        }

        $categoryIds = Category::pluck('id', 'kode_kategori');
        $supplierIds = Supplier::pluck('id', 'kode_supplier');

        $weapons = [
            [
                'category_id' => $categoryIds['KTG001'],
                'supplier_id' => $supplierIds['SUP001'],
                'sku' => 'WP001',
                'nama' => 'Senapan Serbu Viper',
                'harga' => 12500000,
                'stok' => 12,
                'status' => 'tersedia',
                'deskripsi' => 'Senapan serbu kaliber 5.56 mm, cocok untuk operasi taktis.',
            ],
            [
                'category_id' => $categoryIds['KTG002'],
                'supplier_id' => $supplierIds['SUP002'],
                'sku' => 'WP002',
                'nama' => 'Pistol Ranger',
                'harga' => 4500000,
                'stok' => 20,
                'status' => 'tersedia',
                'deskripsi' => 'Pistol ringan dengan akurasi tinggi untuk penggunaan sipil dan operasional.',
            ],
            [
                'category_id' => $categoryIds['KTG003'],
                'supplier_id' => $supplierIds['SUP003'],
                'sku' => 'WP003',
                'nama' => 'Amunisi 9mm',
                'harga' => 500000,
                'stok' => 150,
                'status' => 'tersedia',
                'deskripsi' => 'Isi 50 butir amunisi kaliber 9mm untuk kebutuhan latihan dan operasional.',
            ],
        ];

        foreach ($weapons as $weapon) {
            Weapon::create($weapon);
        }
    }
}
