<?php

namespace Database\Factories;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Supplier>
 */
class SupplierFactory extends Factory
{
    public function definition(): array
    {
        $suppliers = [
            ['kode_supplier' => 'S001', 'nama_supplier' => 'Supplier A'],
            ['kode_supplier' => 'S002', 'nama_supplier' => 'Supplier B'],
            ['kode_supplier' => 'S003', 'nama_supplier' => 'Supplier C'],
        ];

        return [
            'kode_supplier' => fake()->unique()->randomElement($suppliers)['kode_supplier'],
            'nama_supplier' => fake()->randomElement($suppliers)['nama_supplier'],
            'alamat' => fake()->address(),
            'telepon' => fake()->phoneNumber(),
        ];
    }
}
