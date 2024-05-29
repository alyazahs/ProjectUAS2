<?php
include "config.php"; // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $skinType = $_POST['skinType'];
    $usageDuration = $_POST['usageDuration'];
    $review = $_POST['review'];
    $productId = $_POST['productId'];

    // Validate input
    if (empty($name) || empty($skinType) || empty($usageDuration) || empty($review)) {
        die("Please fill in all required fields.");
    }

    // Insert the review into the database
    $stmt = $conn->prepare("INSERT INTO reviews (name, skin_type, usage_duration, review, product_id) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssi", $name, $skinType, $usageDuration, $review, $productId);

    if ($stmt->execute()) {
        echo "Review submitted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Display</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
        .review-card {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            margin: 20px 0;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .review-card .profile {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        .review-card .profile img {
            border-radius: 50%;
            width: 60px;
            height: 60px;
            margin-right: 15px;
        }
        .review-card .profile .name {
            font-weight: bold;
            font-size: 1.2em;
        }
        .review-card .profile .details {
            font-size: 0.9em;
            color: #777;
        }
        .review-card .review-content {
            margin-top: 15px;
        }
        .review-card .review-content .stars {
            color: #f39c12;
        }
        .review-card .review-content .recommend {
            font-weight: bold;
            margin-bottom: 10px;
        }
        .review-card .review-content .review-text {
            font-size: 1em;
            color: #333;
        }
        .review-card .review-footer {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            font-size: 0.9em;
            color: #777;
        }
    </style>
</head>
<body>

<div class="container">
    <?php
    include "config.php"; // Include your database connection file

    // Fetch reviews from the database
    $result = $conn->query("SELECT * FROM reviews WHERE product_id = 1"); // Example product ID

    while ($row = $result->fetch_assoc()) {
        echo '<div class="review-card">';
        echo '<div class="profile">';
        echo '<img src="profile.jpg" alt="Profile Image">'; // Replace with the actual profile image source
        echo '<div>';
        echo '<div class="name">' . $row['name'] . '</div>';
        echo '<div class="details">' . $row['age_group'] . ', ' . $row['skin_type'] . '</div>';
        echo '</div>';
        echo '</div>';
        echo '<div class="review-content">';
        echo '<div class="stars">★★★★★</div>'; // Replace with dynamic star rating if needed
        echo '<div class="recommend">' . $row['name'] . ' recommends this product!</div>';
        echo '<div class="review-text">' . $row['review'] . '</div>';
        echo '</div>';
        echo '<div class="review-footer">';
        echo '<div class="usage-period">Usage Period: ' . $row['usage_duration'] . '</div>';
        echo '<div class="purchase-point">Purchase Point: ' . $row['purchase_point'] . '</div>';
        echo '</div>';
        echo '</div>';
    }

    $conn->close();
    ?>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

