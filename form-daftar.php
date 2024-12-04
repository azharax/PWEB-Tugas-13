<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back-End | Tugas Pertemuan 11</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f4f8;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 2rem;
        }

        h3 {
            color: #2c3e50;
            font-weight: 700;
            font-size: 1.875rem;
            margin-bottom: 1.5rem;
        }

        form {
            background-color: white;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            padding: 2rem;
        }

        label {
            display: block;
            color: #34495e;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        input[type="text"],
        textarea,
        select {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid #ddd;
            border-radius: 0.375rem;
            background-color: #f1f1f1;
            color: #2c3e50;
            font-size: 1rem;
            font-family: 'Poppins', sans-serif;
            margin-bottom: 1.5rem;
        }

        input[type="radio"] {
            margin-right: 0.5rem;
        }

        .btn {
            background-color: #2980b9;
            color: white;
            font-weight: 600;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            transition: background-color 0.3s ease;
            display: block;
            width: 100%;
            text-align: center;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #3498db;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3>Formulir Pendaftaran Siswa Baru</h3>

        <form action="proses-pendaftaran.php" method="POST" enctype="multipart/form-data">
            <div>
                <label for="nama">Nama:</label>
                <input type="text" name="nama" placeholder="Nama lengkap" />
            </div>
            <div>
                <label for="alamat">Alamat:</label>
                <textarea name="alamat"></textarea>
            </div>
            <div>
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <div>
                    <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
                </div>
            </div>
            <div>
                <label for="agama">Agama:</label>
                <select name="agama">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                    <option>Atheis</option>
                </select>
            </div>
            <div>
                <label for="sekolah_asal">Sekolah Asal:</label>
                <input type="text" name="sekolah_asal" placeholder="Nama sekolah" />
            </div>
            
    <div class="mb-4">
        <label for="foto">Upload Foto:</label>
        <input type="file" name="foto" accept="image/*" />
    </div>
    <button type="submit" name="daftar" class="btn">Daftar</button>
    
        </form>
    </div>
</body>

</html>