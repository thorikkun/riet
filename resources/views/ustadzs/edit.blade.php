@extends('layouts.app')

@section('title', 'Edit Ustadz')

@section('content')
    <h1>Edit Ustadz</h1>
    <form action="{{ route('ustadzs.update', $ustadz) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $ustadz->name) }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $ustadz->email) }}" required>
        </div>
        <div class="mb-3">
            <label for="isAdmin" class="form-label">Admin</label>
            <select name="isAdmin" id="isAdmin" class="form-select">
                <option value="0" {{ !$ustadz->isAdmin ? 'selected' : '' }}>Bukan Admin</option>
                <option value="1" {{ $ustadz->isAdmin ? 'selected' : '' }}>Admin</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Perbarui</button>
        <a href="{{ route('ustadzs.index') }}" class="btn btn-secondary">Batal</a>
    </form>
@endsection
