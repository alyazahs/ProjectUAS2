<?php
include("config.php");

if(isset($_POST['daftar'])){
    // Pastikan atribut name pada formulir HTML sesuai
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Lakukan validasi data masukan jika diperlukan

    $sql = "INSERT INTO pengguna (name, username, password)
            VALUES ('$name', '$username', '$password')";
    
    // Periksa apakah koneksi basis data berhasil
    if ($conn) {
        $query = mysqli_query($conn, $sql);

        if($query){
            header('Location: index.html?status=sukses');
        } else {
            header('Location: index.php?status=gagal');
        }
    } else {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }
} else {
    die("Akses dilarang...");
}
?>
