{{-- resources/views/suppliers/index.blade.php --}}
@extends('layouts.app')

@section('title', 'Supplier')
@section('page-title', 'Supplier')

@section('page-action')
<a href="{{ route('suppliers.create') }}" class="btn btn-primary btn-sm">
    <i class="fas fa-plus"></i> Tambah Supplier
</a>
@endsection

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Supplier</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Kode Supplier</th>
                        <th>Nama Supplier</th>
                        <th>Kontak</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($suppliers as $supplier)
                    <tr>
                        <td>{{ $loop->iteration + ($suppliers->currentPage() - 1) * $suppliers->perPage() }}</td>
                        <td>{{ $supplier->kode_supplier }}</td>
                        <td>{{ $supplier->nama_supplier }}</td>
                        <td>{{ $supplier->kontak }}</td>
                        <td>
                            <span class="badge badge-{{ $supplier->status === 'aktif' ? 'success' : 'secondary' }}">
                                {{ ucfirst($supplier->status) }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('suppliers.edit', $supplier) }}" class="btn btn-sm btn-warning">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('suppliers.destroy', $supplier) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Hapus supplier ini?');">
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
                        <td colspan="6" class="text-center text-muted">Belum ada supplier.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        {{ $suppliers->links() }}
    </div>
</div>
@endsection
