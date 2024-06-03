<?php
include("config.php");

if(isset($_POST['daftar'])){
    
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    $sql = "INSERT INTO pengguna (name, email, password)
            VALUES ('$name', '$email', md5('$password'))";
    
    if ($conn) {
        $query = mysqli_query($conn, $sql);

        if($query){
            header('Location: profile.php');
        } else {
            header('Location: signup.php?status=gagal');
        }
    } else {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }
} else {
    die("Akses dilarang...");
}
?>