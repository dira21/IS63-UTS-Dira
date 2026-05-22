<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Supplier;
use App\Models\Weapon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalCategories = Category::count();
        $totalSuppliers = Supplier::count();
        $totalWeapons = Weapon::count();
        $totalStock = Weapon::sum('stok');
        $recentWeapons = Weapon::with(['category', 'supplier'])
            ->latest()
            ->take(5)
            ->get();

        return view('dashboard', compact(
            'totalCategories',
            'totalSuppliers',
            'totalWeapons',
            'totalStock',
            'recentWeapons'
        ));
    }
}

?>