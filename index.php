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
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem;
        }

        h1,
        h3,
        h4 {
            color: #2c3e50;
            font-weight: 700;
        }

        nav ul {
            display: flex;
            justify-content: center;
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            margin: 0 1rem;
        }

        nav a {
            color: #34495e;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #7f8c8d;
        }

        .status-message {
            background-color: #f1f1f1;
            border-radius: 0.5rem;
            padding: 1rem;
            text-align: center;
            font-weight: 600;
            color: #2980b9;
        }

        .card {
            background-color: white;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            padding: 2rem;
        }

        .btn {
            background-color: #2980b9;
            color: white;
            font-weight: 600;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #3498db;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <header>
                <h1 class="text-4xl mb-4">Pendaftaran Siswa Baru</h1>
                <h3 class="text-md">Oleh: Muhammad Azhar Aziz</h3>
                <h3 class="text-md">NRP: 5025231131</h3>
            </header>

            <h4 class="text-xl mt-8 mb-4">Menu</h4>
            <nav>
                <ul>
                    <li><a href="form-daftar.php" class="btn">Daftar Baru</a></li>
                    <li><a href="list-siswa.php" class="btn">Pendaftar</a></li>
                </ul>
            </nav>

            <?php if (isset($_GET['status'])): ?>
                <div class="status-message mt-8">
                    <?php
                    if ($_GET['status'] == 'sukses') {
                        echo "Pendaftaran siswa baru berhasil!";
                    } else {
                        echo "Pendaftaran gagal!";
                    }
                    ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>