<?php
include 'config.php';
include 'navbar.php';
session_start();

// Ensure the user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$user_id = $_SESSION['user_id'];

// Fetch user profile data
$query = "SELECT name, profile_photo FROM pengguna WHERE id = $user_id";
$result = mysqli_query($conn, $query);
if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

$user = mysqli_fetch_assoc($result);
if (!$user) {
    die("User not found.");
}

$user_name = $user['name'];
$profile_photo = $user['profile_photo'] ? 'uploads/' . $user['profile_photo'] : 'default_profile.png';

if (isset($_GET['productId']) && is_numeric($_GET['productId']) && isset($_GET['categoryId']) && is_numeric($_GET['categoryId'])) {
    $productId = intval($_GET['productId']);
    $categoryId = intval($_GET['categoryId']);
} else {
    die("Invalid product ID or category ID.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Review - GRWU - WE SHINE!</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Add Review</h2>
    <form action="add_review_process.php" method="POST">
        <input type="hidden" name="productId" value="<?php echo $productId; ?>">
        <input type="hidden" name="categoryId" value="<?php echo $categoryId; ?>">
        <input type="hidden" name="userId" value="<?php echo $user_id; ?>">
        <div class="form-group">
            <label for="userName">Your Name</label>
            <input type="text" class="form-control" id="userName" name="name" value="<?php echo htmlspecialchars($user_name); ?>" readonly>
        </div>
        <div class="form-group">
            <label for="skinType">Skin Type</label>
            <input type="text" class="form-control" id="skinType" name="skinType" required>
        </div>
        <div class="form-group">
            <label for="usageDuration">Usage Duration</label>
            <input type="text" class="form-control" id="usageDuration" name="usageDuration" required>
        </div>
        <div class="form-group">
            <label for="review">Review</label>
            <textarea class="form-control" id="review" name="review" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit Review</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
