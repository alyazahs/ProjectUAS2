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
            exit();
        } else {
            $error_message = "Email or Password is incorrect. Please try again.";
        }

        $stmt->close();
    } else {
        $error_message = "Username or Password cannot be empty.";
    }
} else {
    $error_message = "Invalid request method.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
            background-image:url('img/bg2.png'); /* warna coklat susu muda */
        }
        .container {
            text-align: center;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .error {
            color: #d32f2f;
            margin-bottom: 15px;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            text-decoration: none;
            color: #ffffff;
            background-color: #582f0e;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .button:hover {
            background-color: #7a4b2e;
        }
        .button a {
            color: #ffffff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php if (isset($error_message)) { echo "<p class='error'>{$error_message}</p>"; } ?>
        <button class="button"><a href='login.php'>Login</a></button>
    </div>
</body>
</html>
