<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Santri</title>
    <!-- Tambahkan CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <!-- Header -->
        <h1 class="text-center mb-4">Daftar Santri</h1>
        
        <!-- Pesan Sukses -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        <!-- Tombol Tambah Santri -->
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('santri.create') }}" class="btn btn-primary">
                Tambah Santri Baru
            </a>
        </div>
        
        <!-- Tabel Data Santri -->
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nama Kamar</th>
                        <th>Kelas</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($santris as $santri)
                        <tr>
                            <td>{{ $santri->id }}</td>
                            <td>{{ $santri->nama_kamar }}</td>
                            <td>{{ $santri->kelas }}</td>
                            <td>
                                <!-- Tombol Edit -->
                                <a href="{{ route('santri.edit', $santri->id) }}" class="btn btn-warning btn-sm">
                                    Edit
                                </a>
                                
                                <!-- Tombol Hapus -->
                                <form action="{{ route('santri.destroy', $santri->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
