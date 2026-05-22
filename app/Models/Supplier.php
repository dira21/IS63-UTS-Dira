<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    /** @use HasFactory<\Database\Factories\SupplierFactory> */
    use HasFactory;

    protected $table = 'suppliers';

    protected $fillable = [
        'kode_supplier',
        'nama_supplier',
        'kontak',
        'status',
    ];

    public function senjata()
    {
        return $this->hasMany(Senjata::class, 'supplier_id');
    }
    
}
