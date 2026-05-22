<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Urutan ini WAJIB diikuti karena adanya foreign key:
        // 1. Kategori dulu
        // 2. Supplier dulu
        // 3. Senjata setelah kategori dan supplier tersedia
        $this->call([
            CategorySeeder::class,
            SupplierSeeder::class,
            WeaponSeeder::class,
        ]);
    }
}
