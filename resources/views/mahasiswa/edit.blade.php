<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
</head>
<body>

    <h1>Edit Data Mahasiswa</h1>

    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama</label><br>
        <input type="text" name="nama" value="{{ $mahasiswa->nama }}" required>

        <br><br>

        <label>NPM</label><br>
        <input type="text" name="npm" value="{{ $mahasiswa->npm }}" required>

        <br><br>

        <label>Jurusan</label><br>
        <input type="text" name="jurusan" value="{{ $mahasiswa->jurusan }}" required>

        <br><br>

        <label>Alamat</label><br>
        <textarea name="alamat" required>{{ $mahasiswa->alamat }}</textarea>

        <br><br>

        <button type="submit">Update</button>

        <a href="{{ route('mahasiswa.index') }}">Kembali</a>
    </form>

</body>
</html>