<?php
require 'config.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: signup.php');
    exit();
}

$user_id = $_SESSION['user_id'];

$query = "SELECT * FROM pengguna WHERE id = $user_id";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

$user = mysqli_fetch_assoc($result);
if (!$user) {
    die("User not found.");
}

$profile_photo = $user['profile_photo'] ? 'uploads/' . $user['profile_photo'] : 'default_profile.png'; // Ensure you have a default profile photo
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WE SHINE!</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .profile-container {
            text-align: center;
            margin-top: 40px;
            background-color: #582f0e;
            padding: 20px; 
        }
        .profile-photo {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%; 
            margin: 20px auto;
            border: 5px solid white; 
        }
        .bg-section {
            background-image: url('img/bg2.png');
            height: 830px;
        }
    </style>
</head>
<body>
<div class="bg-section">
    <header>
        <h1 class="font-italic pt-4" style="text-align: center;">Profile</h1>
    </header>
    <div class="profile-container">
        <img src="<?php echo htmlspecialchars($profile_photo); ?>" class="rounded-circle profile-photo" alt="Profile Photo">
    </div>
    <form action="update_profile.php" method="POST" enctype="multipart/form-data" style="background-color: white; padding: 20px; border-radius: 10px; max-width: 500px; margin: 40px auto; color: #4B3621; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <fieldset>
            <p>
                <label for="name">Name: </label>
                <input type="text" name="name" value="<?php echo htmlspecialchars($user['name']); ?>" style="width: calc(100% - 20px); background-color: #582f0e; color: white;"/>
            </p>
            <p>
                <label for="email">Email: </label>
                <input type="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" style="width: calc(100% - 20px); background-color: #582f0e; color: white;"/>
            </p>
            <p>
                <label for="phone">Phone: </label>
                <input type="text" name="phone" value="<?php echo htmlspecialchars($user['phone']); ?>" style="width: calc(100% - 20px); background-color: #582f0e; color: white;"/>
            </p>
            <p>
                <label for="profile_photo">Profile Photo: </label>
                <input type="file" name="profile_photo" accept="image/*" style="width: calc(100% - 20px); background-color: #582f0e; color: white;"/>
            </p>
            <p>
                <input type="submit" value="Save" name="update_profile" style="background-color: #a98467;  border-radius: 10px; color: white; margin-top: 5px; margin-bottom: 5px;"/>
            </p>
        </fieldset>
    </form>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>