<?php
include 'koneksi.php';
$data = mysqli_query($conn, "SELECT * FROM buku");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Perpustakaan Digital</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h2>📚 Perpustakaan Digital</h2>

<a href="tambah.php" class="btn">+ Tambah Buku</a>

<input type="text" id="search" placeholder="Cari buku..." onkeyup="searchBuku()">

<table id="tabelBuku">
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Tahun</th>
        <th>Status</th>
        <th>Aksi</th>
    </tr>

<?php $no=1; while($row = mysqli_fetch_assoc($data)) { ?>
<tr>
    <td><?= $no++ ?></td>
    <td><?= $row['judul'] ?></td>
    <td><?= $row['penulis'] ?></td>
    <td><?= $row['tahun'] ?></td>
    <td><?= $row['status'] ?></td>
    <td>
        <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
        <a href="hapus.php?id=<?= $row['id'] ?>" onclick="return confirm('Hapus data?')">Hapus</a>
    </td>
</tr>
<?php } ?>

</table>

<script src="js/script.js"></script>
</body>
</html>
