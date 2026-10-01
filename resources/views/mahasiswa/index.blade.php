<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            color: #333;
        }

        .container {
            width: 90%;
            max-width: 1100px;
            margin: 50px auto;
        }

        .header {
            background: #2b883e;
            color: white;
            padding: 25px 30px;
            border-radius: 12px 12px 0 0;
        }

        .header h1 {
            margin: 0 0 8px;
        }

        .header p {
            margin: 0;
        }

        .content {
            background: white;
            padding: 30px;
            border-radius: 0 0 12px 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
        }

        .top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .top h2 {
            margin: 0;
        }

        .btn-tambah {
            background: #879735;
            color: white;
            text-decoration: none;
            padding: 10px 16px;
            border-radius: 7px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            background: #2b883e;
            color: white;
            padding: 12px;
            text-align: left;
        }

        td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background: #f8fafc;
        }

        .btn-edit {
            background: #17cbf8;
            color: white;
            border: none;
            padding: 7px 12px;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn-hapus {
            background: #dc2626;
            color: white;
            border: none;
            padding: 7px 12px;
            border-radius: 5px;
            cursor: pointer;
        }

        .kosong {
            text-align: center;
            padding: 25px;
            color: #777;
        }

        form {
    display: inline;
    margin: 0;
}

.aksi {
    display: flex;
    align-items: center;
    gap: 8px;
}

.btn-edit,
.btn-hapus {
    display: inline-block;
    min-width: 60px;
    text-align: center;
    padding: 8px 12px;
    border-radius: 6px;
    font-size: 14px;
    font-weight: bold;
}
    </style>
</head>

<body>

<div class="container">

    <div class="header">
        <h1>Sistem Data Mahasiswa</h1>
        <p>CRUD Mahasiswa - Laravel 12</p>
    </div>

    <div class="content">

        <div class="top">
            <h2>Data Mahasiswa</h2>

            <a href="{{ route('mahasiswa.create') }}" class="btn-tambah">
                + Tambah Mahasiswa
            </a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NPM</th>
                    <th>Jurusan</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($mahasiswa as $mhs)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $mhs->nama }}</td>
                        <td>{{ $mhs->npm }}</td>
                        <td>{{ $mhs->jurusan }}</td>
                        <td>{{ $mhs->alamat }}</td>
                        <td>

                            <a href="{{ route('mahasiswa.edit', $mhs->id) }}"
                               class="btn-edit">
                                Edit
                            </a>

                            <form action="{{ route('mahasiswa.destroy', $mhs->id) }}"
                                  method="POST">

                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn-hapus"
                                        onclick="return confirm('Yakin ingin menghapus data ini?')">
                                    Hapus
                                </button>

                            </form>

                        </td>
                    </tr>

                @empty

                    <tr>
                        <td colspan="6" class="kosong">
                            Belum ada data mahasiswa.
                        </td>
                    </tr>

                @endforelse
            </tbody>
        </table>

    </div>

</div>

</body>
</html>