<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "perpustakaan_qr"
);

if (!$conn) {
    die("Koneksi database gagal!");
}

?>