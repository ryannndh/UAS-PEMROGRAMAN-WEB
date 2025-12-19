<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $tahun = $_POST['tahun'];

    mysqli_query($conn,
        "INSERT INTO buku (judul, penulis, tahun)
         VALUES ('$judul', '$penulis', '$tahun')");
}
?>
