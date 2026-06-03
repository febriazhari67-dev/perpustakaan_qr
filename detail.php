<?php
include 'koneksi.php';

$id = $_GET['id'];

$data = mysqli_query(
$conn,
"SELECT * FROM buku WHERE id_buku='$id'"
);

$buku = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Detail Buku</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Detail Buku</h1>

<p><b>ID Buku:</b> <?= $buku['id_buku']; ?></p>

<p><b>Judul:</b> <?= $buku['judul']; ?></p>

<p><b>Penulis:</b> <?= $buku['penulis']; ?></p>

<p><b>Status:</b> <?= $buku['status']; ?></p>

<a href="index.php">Kembali</a>

</body>
</html>ssss