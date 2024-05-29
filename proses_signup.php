<?php
include("config.php");

if(isset($_POST['daftar'])){
    
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    $sql = "INSERT INTO pengguna (name, username, password)
            VALUES ('$name', '$username', md5('$password'))";
    
    if ($conn) {
        $query = mysqli_query($conn, $sql);

        if($query){
            header('Location: index.php?status=sukses');
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
