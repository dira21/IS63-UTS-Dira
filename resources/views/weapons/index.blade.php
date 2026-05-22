{{-- resources/views/weapons/index.blade.php --}}
@extends('layouts.app')

@section('title', 'Daftar Senjata')
@section('page-title', 'Daftar Senjata')

@section('page-action')
<a href="{{ route('weapons.create') }}" class="btn btn-primary btn-sm">
    <i class="fas fa-plus"></i> Tambah Senjata
</a>
@endsection

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Senjata Toko</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>SKU</th>
                        <th>Nama Senjata</th>
                        <th>Kategori</th>
                        <th>Supplier</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($weapons as $weapon)
                    <tr>
                        <td>{{ $loop->iteration + ($weapons->currentPage() - 1) * $weapons->perPage() }}</td>
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
                        <td>
                            <a href="{{ route('weapons.edit', $weapon) }}" class="btn btn-sm btn-warning">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('weapons.destroy', $weapon) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Hapus data senjata ini?');">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="9" class="text-center text-muted">Belum ada data senjata.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        {{ $weapons->links() }}
    </div>
</div>
@endsection
