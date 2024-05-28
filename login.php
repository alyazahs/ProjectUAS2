<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

       
        $stmt = $conn->prepare("SELECT * FROM pengguna WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);

        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            header("Location: index.html");
        } else {
            echo "<center><h1>Email atau Password Anda Salah. Silahkan Coba Login Kembali.</h1>
                  <button><strong><a href='index.html'>Login</a></strong></button></center>";
        }

        $stmt->close();
    } else {
        echo "<center><h1>Username atau Password tidak boleh kosong.</h1>
              <button><strong><a href='index.html'>Login</a></strong></button></center>";
    }
} else {
    echo "<center><h1>Metode pengiriman data tidak valid.</h1></center>";
}
?>


