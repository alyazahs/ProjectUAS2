<?php
include 'config.php';
session_start();

// Memastikan pengguna telah login
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$user_id = $_SESSION['user_id'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productId = intval($_POST['productId']);
    $categoryId = intval($_POST['categoryId']);
    $name = $conn->real_escape_string($_POST['name']);
    $skinType = $conn->real_escape_string($_POST['skinType']);
    $usageDuration = $conn->real_escape_string($_POST['usageDuration']);
    $review = $conn->real_escape_string($_POST['review']);

    $sql = "INSERT INTO review (id_produk, nama_pengguna, tipe_kulit, lama_penggunaan, review, id_pengguna)
            VALUES ('$productId', '$name', '$skinType', '$usageDuration', '$review', '$user_id')";

    if ($conn->query($sql) === TRUE) {
        header("Location: add_review_process.php?productId=$productId");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    if (isset($_GET['productId']) && is_numeric($_GET['productId'])) {
        $productId = intval($_GET['productId']);
        $stmt = $conn->prepare("SELECT nama_produk, id_kategori FROM produk WHERE id_produk = ?");
        $stmt->bind_param("i", $productId);
        $stmt->execute();
        $result = $stmt->get_result();
        $product = $result->fetch_assoc();
        $stmt->close();

        if ($product) {
            $categoryId = $product['id_kategori'];

            // Menentukan halaman rekomendasi yang sesuai
            $recommendationPage = "";
            switch ($categoryId) {
                case 1:
                    $recommendationPage = "recomendation1.php";
                    break;
                case 2:
                    $recommendationPage = "recomendation2.php";
                    break;
                case 3:
                    $recommendationPage = "recomendation3.php";
                    break;
                case 4:
                    $recommendationPage = "recomendation4.php";
                    break;
                default:
                    $recommendationPage = "recomendation1.php"; // Halaman default
                    break;
            }

            echo '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Product Reviews</title>
                <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
                <style>
                    body {
                        background-image: url("img/bg2.png");
                        background-size: cover;
                        background-repeat: no-repeat;
                        background-attachment: fixed;
                        background-position: center;
                    }
                    .container {
                        margin-top: 50px;
                    }
                    .review-card {
                        background-color: #ffffff;
                        border: 1px solid #e0e0e0;
                        border-radius: 8px;
                        padding: 20px;
                        margin-bottom: 20px;
                        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                    }
                    .profile {
                        display: flex;
                        flex-direction: column;
                        align-items: flex-start;
                        margin-bottom: 15px;
                    }
                    .profile img {
                        width: 100px;
                        height: 100px;
                        object-fit: cover;
                        border-radius: 50%; 
                        border: 5px solid white; 
                        margin-bottom: 10px;
                    }
                    .profile .name {
                        font-size: 1.2em;
                        font-weight: bold;
                        margin-top: 0;
                    }
                    .profile .details {
                        font-size: 0.9em;
                        color: #6c757d;
                        margin-top: 5px;
                    }
                    .review-content .stars {
                        color: #ffc107;
                        margin-bottom: 10px;
                    }
                    .review-content .recommend {
                        font-weight: bold;
                        color: #28a745;
                        margin-bottom: 10px;
                    }
                    .review-content .review-text {
                        font-size: 1em;
                        color: #212529;
                    }
                    .back-button {
                        background-color: #582f0e;
                        position: fixed;
                        bottom: 20px;
                        right: 20px;
                        color: #ffff;
                    }
                </style>
            </head>
            <body>
            <div class="container">
            ';

            echo '<h1 class="mb-4">Reviews for ' . htmlspecialchars($product['nama_produk']) . '</h1>';

            $stmt = $conn->prepare("SELECT review.*, pengguna.profile_photo FROM review LEFT JOIN pengguna ON review.id_pengguna = pengguna.id WHERE id_produk = ?");
            $stmt->bind_param("i", $productId);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="review-card">';
                    echo '<div class="profile">';
                    $profile_img = $row['profile_photo'] ? 'uploads/' . $row['profile_photo'] : 'default_profile.png';
                    echo '<img src="' . htmlspecialchars($profile_img) . '" alt="Profile Image">';
                    echo '<div class="name">' . htmlspecialchars($row['nama_pengguna']) . '</div>';
                    echo '<div class="details">' . htmlspecialchars($row['tipe_kulit']) . ', ' . htmlspecialchars($row['lama_penggunaan']) . '</div>';
                    echo '</div>';
                    echo '<div class="review-content">';
                    echo '<div class="stars">★★★★★</div>';
                    echo '<div class="recommend">' . htmlspecialchars($row['nama_pengguna']) . ' recommends this product!</div>';
                    echo '<div class="review-text">' . htmlspecialchars($row['review']) . '</div>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo "<p>No reviews for this product yet.</p>";
            }

            $stmt->close();

            echo '<a href="' . $recommendationPage . '" class="btn btn-secondary back-button">Back</a>';
            echo '</div></body></html>';
        } else {
            echo "<p>Product not found.</p>";
        }
    } else {
        echo "<p>Invalid product ID.</p>";
    }

    $conn->close();
}
?>
