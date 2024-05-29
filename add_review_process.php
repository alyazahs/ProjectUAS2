<?php
include "config.php"; // Include your database connection file

// Check if productId is passed via GET request
$productId = isset($_GET['productId']) ? intval($_GET['productId']) : 0;

if ($productId > 0) {
    // Fetch product name for display
    $stmt = $conn->prepare("SELECT nama_produk FROM produk WHERE id_produk = ?");
    $stmt->bind_param("i", $productId);
    $stmt->execute();
    $result = $stmt->get_result();
    $product = $result->fetch_assoc();
    $stmt->close();

    if ($product) {
        echo "<h1>Reviews for " . htmlspecialchars($product['nama_produk']) . "</h1>";
        
        // Fetch reviews for the specified product
        $stmt = $conn->prepare("SELECT * FROM review WHERE id_produk = ?");
        $stmt->bind_param("i", $productId);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="review-card">';
                echo '<div class="profile">';
                echo '<img src="profile.jpg" alt="Profile Image">'; // Replace with actual profile image source
                echo '<div>';
                echo '<div class="name">' . htmlspecialchars($row['nama_pengguna']) . '</div>';
                echo '<div class="details">' . htmlspecialchars($row['tipe_kulit']) . ', ' . htmlspecialchars($row['lama_penggunaan']) . '</div>';
                echo '</div>';
                echo '</div>';
                echo '<div class="review-content">';
                echo '<div class="stars">★★★★★</div>'; // Replace with dynamic star rating if needed
                echo '<div class="recommend">' . htmlspecialchars($row['nama_pengguna']) . ' recommends this product!</div>';
                echo '<div class="review-text">' . htmlspecialchars($row['review']) . '</div>';
                echo '</div>';
                echo '</div>';
            }
        } else {
            echo "<p>No reviews for this product yet.</p>";
        }

        $stmt->close();
    } else {
        echo "<p>Product not found.</p>";
    }
} else {
    echo "<p>Invalid product ID.</p>";
}

$conn->close();
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
    </style>
</head>
<body>
<div class="container">
    <!-- Review display will be populated here -->
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
