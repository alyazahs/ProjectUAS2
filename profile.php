<?php
include 'navbar.php';

include 'config.php';

// Start the session to get the logged-in user's username
session_start();

// Replace this with the actual logic to get the username of the logged-in user
$username = $_SESSION['username'];

$sql = "SELECT * FROM pengguna WHERE username = '$username'";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);
} else {
    die("User not found.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container" style="margin-top: 40px;">
        <div class="card" style="max-width: 600px; margin: 0 auto; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
            <div class="card-body">
                <h2 class="card-title" style="text-align: center;">Profile</h2>
                <div class="text-center">
                    <img src="path_to_profile_picture.jpg" alt="Profile Picture" class="img-thumbnail" style="width: 150px; height: 150px; object-fit: cover;">
                </div>
                <ul class="list-group list-group-flush mt-4">
                    <li class="list-group-item"><strong>Name:</strong> <?php echo $user['name']; ?></li>
                    <li class="list-group-item"><strong>Username:</strong> <?php echo $user['username']; ?></li>
                    <li class="list-group-item"><strong>Phone Number:</strong> <?php echo $user['no_hp']; ?></li>
                    <li class="list-group-item"><strong>Email:</strong> <?php echo $user['email']; ?></li>
                    <li class="list-group-item"><strong>Date of Birth:</strong> <?php echo $user['tgl_lahir']; ?></li>
                </ul>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
