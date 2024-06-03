<?php
require 'config.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["identifier"]) && isset($_POST["password"])) {
        $identifier = $_POST["identifier"];
        $password = md5($_POST["password"]);

        $query = "SELECT id, name, email FROM pengguna WHERE (name = ? OR email = ?) AND password = ?";
        $stmt = $conn->prepare($query);

        if ($stmt === false) {
            die("Prepare failed: " . htmlspecialchars($conn->error));
        }

        $stmt->bind_param("sss", $identifier, $identifier, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            $_SESSION['user_id'] = $user['id'];
            header("Location: profile.php");
        } else {
            echo "<center><h1>Email or Password is incorrect. Please try again.</h1>
                  <button><strong><a href='login.php'>Login</a></strong></button></center>";
        }

        $stmt->close();
    } else {
        echo "<center><h1>Username or Password cannot be empty.</h1>
              <button><strong><a href='login.php'>Login</a></strong></button></center>";
    }
} else {
    echo "<center><h1>Invalid request method.</h1></center>";
}
?>