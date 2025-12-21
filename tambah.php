<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $tahun = $_POST['tahun'];

    mysqli_query($conn,
        "INSERT INTO buku (judul, penulis, tahun)
        VALUES ('$judul', '$penulis', '$tahun')");

    // pindah ke halaman utama setelah simpan
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h1>Tambah Buku</h1>

<form method="post">
    <input type="text" name="judul" placeholder="Judul"><br><br>
    <input type="text" name="penulis" placeholder="Penulis"><br><br>
    <input type="number" name="tahun" placeholder="Tahun"><br><br>
    <button type="submit" name="simpan">Simpan</button>
</form>

<script src="js/script.js"></script>
</body>
</html>
