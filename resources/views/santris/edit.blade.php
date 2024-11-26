<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Santri</title>
</head>
<body>
    <h1>Edit Santri</h1>

    <form action="{{ route('santri.update', $santri->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="id_user">ID User</label>
        <input type="number" name="id_user" id="id_user" value="{{ $santri->id_user }}" required>
        
        <label for="nama_kamar">Nama Kamar</label>
        <input type="text" name="nama_kamar" id="nama_kamar" value="{{ $santri->nama_kamar }}" required>

        <label for="kelas">Kelas</label>
        <input type="text" name="kelas" id="kelas" value="{{ $santri->kelas }}" required>

        <button type="submit">Update</button>
    </form>
</body>
</html>
