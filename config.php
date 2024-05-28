<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "we_shine";

// Membuat koneksi
$conn = mysqli_connect($server, $user, $password, $nama_database);

// Memeriksa koneksi
if (!$conn) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
} else {
    echo "Berhasil terhubung ke database!";
}

?>