@extends('layouts.app')

@section('title', 'Tambah Ustadz')

@section('content')
    <h1>Tambah Ustadz</h1>
    <form action="{{ route('ustadzs.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="isAdmin" class="form-label">Admin</label>
            <select name="isAdmin" id="isAdmin" class="form-select">
                <option value="0" selected>Bukan Admin</option>
                <option value="1">Admin</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('ustadzs.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
