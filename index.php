<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Perpustakaan QR</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Sistem Peminjaman Buku Digital</h1>

<a href="tambah_buku.php">Tambah Buku</a>
<a href="pinjam.php">Pinjam Buku</a>
<a href="kembali.php">Kembalikan Buku</a>
<a href="riwayat.php">Riwayat Peminjaman</a>

<br><br>

<?php
$jumlah = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM buku"));
?>

<h3>Total Buku: <?= $jumlah; ?></h3>

<table>

<tr>
    <th>ID</th>
    <th>Judul</th>
    <th>Penulis</th>
    <th>Status</th>
    <th>QR Code</th>
</tr>

<?php

$data = mysqli_query($conn,"SELECT * FROM buku");

while($row = mysqli_fetch_assoc($data))
{
?>

<tr>
    <td><?= $row['id_buku']; ?></td>
    <td><?= $row['judul']; ?></td>
    <td><?= $row['penulis']; ?></td>
    <td>

<?php
if($row['status']=="Tersedia")
{
    echo "<span style='color:green;font-weight:bold;'>Tersedia</span>";
}
else
{
    echo "<span style='color:red;font-weight:bold;'>Dipinjam</span>";
}
?>

</td>

    <td>
   <img src="https://api.qrserver.com/v1/create-qr-code/?size=100x100&data=http://127.0.0.1/perpustakaan_qr/detail.php?id=<?= $row['id_buku']; ?>" width="100">
    </td>
</tr>

<?php
}
?>

</table>

<hr>

<p align="center">
Sistem Peminjaman Buku Digital Berbasis QR Code
</p>

</body>
</html>