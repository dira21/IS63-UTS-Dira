{{-- resources/views/dashboard.blade.php --}}
@extends('layouts.app')
 
@section('title', 'Dashboard')
@section('page-title', 'Dashboard')
 
@section('content')
 
{{-- Baris Kartu Statistik --}}
<div class="row">
 
    {{-- Kartu: Total Kategori --}}
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-info shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                            Total Kategori Senjata
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            {{ $totalCategories }}
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-tags fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    {{-- Kartu: Total Senjata --}}
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Senjata
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            {{ $totalWeapons }}
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-gun fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Kartu: Total Supplier --}}
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Total Supplier
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            {{ $totalSuppliers }}
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-truck fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    {{-- Kartu: Total Stok --}}
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Total Stok Tersedia
                        </div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">
                            {{ $totalStock }}
                        </div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-boxes fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
</div>
 
{{-- Tabel Senjata Terbaru --}}
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">
            <i class="fas fa-gun mr-2"></i>Senjata Terbaru
        </h6>
        {{-- <a href="{{ route('weapons.index') }}" class="btn btn-sm btn-primary">
            Lihat Semua
        </a> --}}

        <a href="#" class="btn btn-sm btn-primary">
            Lihat Semua
        </a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>SKU</th>
                        <th>Nama Senjata</th>
                        <th>Kategori</th>
                        <th>Supplier</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($recentWeapons as $weapon)
                    <tr>
                        <td>{{ $weapon->sku }}</td>
                        <td>{{ $weapon->nama }}</td>
                        <td>{{ $weapon->category->nama_kategori ?? '-' }}</td>
                        <td>{{ $weapon->supplier->nama_supplier ?? '-' }}</td>
                        <td>{{ $weapon->harga_format }}</td>
                        <td>{{ $weapon->stok }}</td>
                        <td>
                            <span class="badge badge-{{ $weapon->status === 'tersedia' ? 'success' : 'danger' }}">
                                {{ ucfirst($weapon->status) }}
                            </span>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted">
                            Belum ada data senjata.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
 
@endsection
