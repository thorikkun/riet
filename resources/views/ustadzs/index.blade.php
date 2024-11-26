@extends('layouts.app')

@section('title', 'Daftar Ustadz')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Daftar Ustadz</h1>
        <a href="{{ route('ustadzs.create') }}" class="btn btn-primary">Tambah Ustadz</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Admin</th>
                
            </tr>
        </thead>
        <tbody>
            @forelse($ustadzs as $ustadz)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $ustadz->name }}</td>
                    <td>{{ $ustadz->email }}</td>
                    <td>{{ $ustadz->isAdmin ? 'Ya' : 'Tidak' }}</td>
                    <td>
                        <a href="{{ route('ustadzs.edit', $ustadz) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('ustadzs.destroy', $ustadz) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Tidak ada data</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
