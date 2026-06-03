<?php

include 'koneksi.php';

if(isset($_POST['kembali']))
{
    $id_buku = $_POST['id_buku'];

    mysqli_query(
        $conn,
        "UPDATE buku
        SET status='Tersedia'
        WHERE id_buku='$id_buku'"
    );

    mysqli_query(
        $conn,
        "UPDATE peminjaman
        SET tanggal_kembali=CURDATE()
        WHERE id_buku='$id_buku'
        AND tanggal_kembali IS NULL"
    );

    echo "<h3>Buku berhasil dikembalikan</h3>";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Pengembalian Buku</title>
</head>
<body>

<h2>Form Pengembalian Buku</h2>

<form method="POST">

ID Buku<br>
<input type="number" name="id_buku" required>

<br><br>

<button type="submit" name="kembali">
Kembalikan Buku
</button>

</form>

</body>
</html>