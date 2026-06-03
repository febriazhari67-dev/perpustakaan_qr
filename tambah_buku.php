<?php

include 'koneksi.php';

if(isset($_POST['simpan']))
{
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $tahun = $_POST['tahun'];

    mysqli_query(
        $conn,
        "INSERT INTO buku(judul,penulis,tahun_terbit)
        VALUES('$judul','$penulis','$tahun')"
    );

    header("Location:index.php");
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Tambah Buku</title>
</head>
<body>

<h2>Tambah Buku</h2>

<form method="POST">

Judul Buku<br>
<input type="text" name="judul" required>

<br><br>

Penulis<br>
<input type="text" name="penulis" required>

<br><br>

Tahun Terbit<br>
<input type="number" name="tahun" required>

<br><br>

<button name="simpan">
Simpan
</button>

</form>

</body>
</html>