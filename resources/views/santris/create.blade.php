<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Santri</title>
    <!-- Tambahkan CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <!-- Header -->
        <h1 class="text-center mb-4">Tambah Santri</h1>

        <!-- Form Tambah Santri -->
        <form action="{{ route('santri.store') }}" method="POST" class="p-4 shadow-sm rounded bg-light">
            @csrf

            <!-- ID User -->
            <div class="mb-3">
                <label for="id_user" class="form-label">ID User</label>
                <input type="number" name="id_user" id="id_user" class="form-control" placeholder="Masukkan ID User" required>
            </div>

            <!-- Nama Kamar -->
            <div class="mb-3">
                <label for="nama_kamar" class="form-label">Nama Kamar</label>
                <input type="text" name="nama_kamar" id="nama_kamar" class="form-control" placeholder="Masukkan Nama Kamar" required>
            </div>

            <!-- Kelas -->
            <div class="mb-3">
                <label for="kelas" class="form-label">Kelas</label>
                <input type="text" name="kelas" id="kelas" class="form-control" placeholder="Masukkan Kelas" required>
            </div>

            <!-- Nama -->
            <div class="mb-3">
                <label for="nama" class="form-label">nama</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukan nama santri" required>
            </div>

            <!-- Tombol Submit -->
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('santri.index') }}" class="btn btn-secondary">Batal</a>
            </div>
        </form>
    </div>

</body>
</html>
