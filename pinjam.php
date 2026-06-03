<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'koneksi.php';

if(isset($_POST['pinjam']))
{
    echo "TOMBOL TERDETEKSI";

    $id_buku = $_POST['id_buku'];
    $nama = $_POST['nama'];

    mysqli_query(
        $conn,
        "INSERT INTO peminjaman(id_buku,nama_peminjam,tanggal_pinjam)
        VALUES('$id_buku','$nama',CURDATE())"
    );

    mysqli_query(
        $conn,
        "UPDATE buku
        SET status='Dipinjam'
        WHERE id_buku='$id_buku'"
    );

    echo "<br>Peminjaman berhasil";
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Peminjaman Buku</title>
</head>
<body>

<h2>Form Peminjaman Buku</h2>

<form method="POST">

ID Buku<br>
<input type="number" name="id_buku" required>

<br><br>

Nama Peminjam<br>
<input type="text" name="nama" required>

<br><br>

<button type="submit" name="pinjam">
Pinjam Buku
</button>

</form>

</body>
</html>