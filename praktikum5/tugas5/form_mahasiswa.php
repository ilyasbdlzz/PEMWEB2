<?php require_once 'class_NilaiMahasiswa.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 50px;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 500px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 4px;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
        ul {
            list-style: none;
            padding: 0;
            margin-top: 20px;
        }
        ul li {
            margin-bottom: 10px;
        }
        ul li strong {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Form Nilai Ujian</h1><hr>

    <form action="" method="POST">
        <div>
            <label for="nim">NIM</label>
            <input type="number" name="nim" id="nim" required>
        </div><br>
        <div>
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" required>
        </div><br>
        <div>
            <label for="mk">Mata Kuliah</label>
            <input type="text" name="mk" id="mk" required>
        </div><br>
        <div>
            <label for="nilai">Nilai</label>
            <input type="number" name="nilai" id="nilai" required>
        </div><br>
        <div>
            <button type="submit" name="submit">Hasil</button>
        </div>
    </form>

    <?php 

    if (isset($_POST['submit'])) {
    // Ambil data
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $matakuliah = $_POST['mk'];
    $nilai = $_POST['nilai'];

    // Proses nilai
    $nilaiMahasiswa = new NilaiMahasiswa($matakuliah, $nilai, $nim, $nama);
    $hasilUjian = $nilaiMahasiswa->hasilujian();
    $grade = $nilaiMahasiswa->grade();
    ?>

    <ul>
        <li>NIM : <?= $nim ?></li>
        <li>Nama : <?= $nama ?></li>
        <li>Mata Kuliah : <?= $matakuliah ?></li>
        <li>Nilai : <?= $nilai ?></li>
        <li>Hasil Ujian : <?= $hasilUjian ?></li>
        <li>Grade : <?= $grade ?></li>
    </ul>
    <?php } ?>
    
    
</body>
</html>
