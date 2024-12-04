<?php
include("config.php");

if (!isset($_GET['id'])) {
    header('Location: list-siswa.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
    die("Data not found...");
}
?>

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
        <h3>Formulir Edit Siswa</h3>

        <form action="proses-edit.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
            <div>
                <label for="nama">Nama:</label>
                <input type="text" name="nama" placeholder="Nama lengkap" value="<?php echo $siswa['nama'] ?>" />
            </div>
            <div>
                <label for="alamat">Alamat:</label>
                <textarea name="alamat"><?php echo $siswa['alamat'] ?></textarea>
            </div>
            <div>
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <div>
                    <?php $jk = $siswa['jenis_kelamin']; ?>
                    <label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked" : "" ?>> Laki-laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked" : "" ?>> Perempuan</label>
                </div>
            </div>
            <div>
                <label for="agama">Agama:</label>
                <?php $agama = $siswa['agama']; ?>
                <select name="agama">
                    <option <?php echo ($agama == 'Islam') ? "selected" : "" ?>>Islam</option>
                    <option <?php echo ($agama == 'Kristen') ? "selected" : "" ?>>Kristen</option>
                    <option <?php echo ($agama == 'Hindu') ? "selected" : "" ?>>Hindu</option>
                    <option <?php echo ($agama == 'Budha') ? "selected" : "" ?>>Budha</option>
                    <option <?php echo ($agama == 'Atheis') ? "selected" : "" ?>>Atheis</option>
                </select>
            </div>
            <div>
                <label for="sekolah_asal">Sekolah Asal:</label>
                <input type="text" name="sekolah_asal" placeholder="Nama sekolah"
                    value="<?php echo $siswa['sekolah_asal'] ?>" />
            </div>
            <img src='<?php echo $siswa['foto'] ?>' alt='Foto Siswa' style='width: 100px; height: auto;'>
            <div class="mb-4">
                <label for="foto">Foto Baru:</label>
                <input type="file" name="foto" accept="image/*" />
            </div>
            <button type="submit" name="simpan" class="btn">Simpan</button>
        </form>
    </div>
</body>

</html>