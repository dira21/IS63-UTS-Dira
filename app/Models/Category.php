<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;

    protected $table = 'weapon_categories';

    protected $fillable = [
        'kode_kategori',
        'nama_kategori',
        'status',
    ];

    public function weapons()
    {
        return $this->hasMany(Weapon::class, 'category_id');
    }
}
