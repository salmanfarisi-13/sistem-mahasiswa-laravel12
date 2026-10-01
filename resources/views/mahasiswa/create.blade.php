<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            margin: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        }

        h1 {
            color: #2b883e;
        }

        label {
            font-weight: bold;
        }

        input, textarea {
            width: 100%;
            padding: 11px;
            margin-top: 7px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        textarea {
            height: 100px;
            resize: vertical;
        }

        button, a {
            padding: 10px 16px;
            border-radius: 6px;
            text-decoration: none;
            border: none;
            cursor: pointer;
        }

        button {
            background: #879735;
            color: white;
        }

        .kembali {
            background: #6b7280;
            color: white;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Tambah Data Mahasiswa</h1>

    <form action="{{ route('mahasiswa.store') }}" method="POST">

        @csrf

        <label>Nama</label>
        <input type="text" name="nama" required>

        <br><br>

        <label>NPM</label>
        <input type="text" name="npm" required>

        <br><br>

        <label>Jurusan</label>
        <input type="text" name="jurusan" required>

        <br><br>

        <label>Alamat</label>
        <textarea name="alamat" required></textarea>

        <br><br>

        <button type="submit">Simpan</button>

        <a href="{{ route('mahasiswa.index') }}" class="kembali">
            Kembali
        </a>

    </form>

</div>

</body>
</html>