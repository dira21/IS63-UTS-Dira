{{-- resources/views/categories/index.blade.php --}}
@extends('layouts.app')

@section('title', 'Kategori Senjata')
@section('page-title', 'Kategori Senjata')

@section('page-action')
<a href="{{ route('categories.create') }}" class="btn btn-primary btn-sm">
    <i class="fas fa-plus"></i> Tambah Kategori
</a>
@endsection

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Kategori Senjata</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="thead-light">
                    <tr>
                        <th>#</th>
                        <th>Kode</th>
                        <th>Nama Kategori</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration + ($categories->currentPage() - 1) * $categories->perPage() }}</td>
                        <td>{{ $category->kode_kategori }}</td>
                        <td>{{ $category->nama_kategori }}</td>
                        <td>
                            <span class="badge badge-{{ $category->status === 'aktif' ? 'success' : 'secondary' }}">
                                {{ ucfirst($category->status) }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('categories.edit', $category) }}" class="btn btn-sm btn-warning">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('categories.destroy', $category) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Hapus kategori ini?');">
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
                        <td colspan="5" class="text-center text-muted">Belum ada kategori senjata.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        {{ $categories->links() }}
    </div>
</div>
@endsection
