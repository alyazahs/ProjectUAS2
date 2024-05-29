<?php include 'config.php'; // Sertakan file koneksi.php ?>
<?php include 'navbar.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GRWU - WE SHINE!</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
        .bg-section {
            background-image: url('img/bg2.png');
        }
    </style>
</head>
<body>
<div class="bg-section">
    <div class="container">
        <h1 class="text-center font-italic bold" style="color:#582f0e;">Skincare Products</h1>
        <div class="row">
            <?php
            $sql = "SELECT * FROM produk WHERE id_kategori = 2";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='col-md-4'>";
                    echo "<div class='card mb-4 shadow-sm'>";
                    echo "<img src='" . $row["url_gambar"] . "' class='card-img-top' alt='Product Image'>";
                    echo "<div class='card-body'>";
                    echo "<h5 class='card-title'>" . $row["nama_produk"] . "</h5>";
                    echo "<a href='add_review.php' class='btn btn-primary'>Add Review</a>"; // Updated button
                    echo "<button type='button' class='btn btn-primary' onclick=\"location.href='add_review_process.php'\">See Review</button>";
                    echo "</div></div></div>";
                }
            } else {
                echo "Tidak ada produk.";
            }
            $conn->close();
            ?>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>