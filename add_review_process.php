<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productId = intval($_POST['productId']);
    $categoryId = intval($_POST['categoryId']);
    $name = $conn->real_escape_string($_POST['name']);
    $skinType = $conn->real_escape_string($_POST['skinType']);
    $usageDuration = $conn->real_escape_string($_POST['usageDuration']);
    $review = $conn->real_escape_string($_POST['review']);

    $sql = "INSERT INTO review (id_produk, nama_pengguna, tipe_kulit, lama_penggunaan, review)
            VALUES ('$productId', '$name', '$skinType', '$usageDuration', '$review')";

    if ($conn->query($sql) === TRUE) {
        header("Location: add_review_process.php?productId=$productId");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
} else {
    // Display reviews for a given product
    if (isset($_GET['productId']) && is_numeric($_GET['productId'])) {
        $productId = intval($_GET['productId']);

        $stmt = $conn->prepare("SELECT nama_produk FROM produk WHERE id_produk = ?");
        $stmt->bind_param("i", $productId);
        $stmt->execute();
        $result = $stmt->get_result();
        $product = $result->fetch_assoc();
        $stmt->close();

        if ($product) {
            echo "<h1>Reviews for " . htmlspecialchars($product['nama_produk']) . "</h1>";

            $stmt = $conn->prepare("SELECT * FROM review WHERE id_produk = ?");
            $stmt->bind_param("i", $productId);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="review-card">';
                    echo '<div class="profile">';
                    echo '<img src="profile.jpg" alt="Profile Image">'; // Placeholder profile image
                    echo '<div>';
                    echo '<div class="name">' . htmlspecialchars($row['nama_pengguna']) . '</div>';
                    echo '<div class="details">' . htmlspecialchars($row['tipe_kulit']) . ', ' . htmlspecialchars($row['lama_penggunaan']) . '</div>';
                    echo '</div>';
                    echo '</div>';
                    echo '<div class="review-content">';
                    echo '<div class="stars">★★★★★</div>'; // Static stars for demonstration
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
}
?>
