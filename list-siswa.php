<?php include("config.php"); ?>

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
            max-width: 1000px;
            margin: 0 auto;
            padding: 2rem;
        }

        h3 {
            color: #2c3e50;
            font-weight: 700;
            font-size: 1.875rem;
            margin-bottom: 1.5rem;
        }

        .table {
            background-color: white;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            overflow-x: auto;
        }

        .table th,
        .table td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid #f1f1f1;
        }

        .table th {
            background-color: #2980b9;
            color: white;
            font-weight: 600;
        }

        .table tr:last-child td {
            border-bottom: none;
        }

        .btn {
            background-color: #2980b9;
            color: white;
            font-weight: 600;
            padding: 0.5rem 1rem;
            border-radius: 0.375rem;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #3498db;
        }
    </style>
</head>

<body>
    <div class="container">
        <h3>Siswa yang sudah mendaftar</h3>

        <nav class="mb-4">
            <a href="form-daftar.php" class="btn">[+] Tambah Baru</a>
        </nav>

        <div class="table">
            <table class="w-full">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Agama</th>
                        <th>Sekolah Asal</th>
                        <th>Foto</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM calon_siswa";
                    $query = mysqli_query($db, $sql);

                    while ($siswa = mysqli_fetch_array($query)) {
                        echo "<tr>";

                        echo "<td>" . $siswa['id'] . "</td>";
                        echo "<td>" . $siswa['nama'] . "</td>";
                        echo "<td>" . $siswa['alamat'] . "</td>";
                        echo "<td>" . $siswa['jenis_kelamin'] . "</td>";
                        echo "<td>" . $siswa['agama'] . "</td>";
                        echo "<td>" . $siswa['sekolah_asal'] . "</td>";

                        // Display the photo if available
                        if ($siswa['foto']) {
                            echo "<td><img src='" . $siswa['foto'] . "' alt='Foto Siswa' style='width: 100px; height: auto;'></td>";
                        } else {
                            echo "<td><em>Tidak ada foto</em></td>";
                        }

                        echo "<td>";
                        echo "<a href='form-edit.php?id=" . $siswa['id'] . "' class='btn mr-2'>Edit</a>";
                        echo "<a href='hapus.php?id=" . $siswa['id'] . "' class='btn'>Hapus</a>";
                        echo "</td>";

                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <p class="mt-4">Total: <?php echo mysqli_num_rows($query) ?></p>
    </div>
</body>

</html>