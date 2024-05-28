<?php

$server = "localhost";
$user = "root";
$password = "";
<<<<<<< HEAD
$dbname = "we_shine";
=======
$nama_database = "we_shine";
>>>>>>> 5c705008c0c486d664dbe5c5f9bf412d0901b110

// Membuat koneksi
$conn = mysqli_connect($server, $user, $password, $nama_database);

// Memeriksa koneksi
if (!$conn) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>