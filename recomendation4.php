<?php include 'config.php';?>
<?php include 'navbar.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WE SHINE!</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <style>
        .bg-section {
            background-image: url('img/bg2.png');
            background-size: cover;
            background-position: center;
            color: #582f0e;
        }
        .card {
            border: none;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.2s ease-in-out;
            height: 400px; 
            width: 380px;
            display: flex;
            flex-direction: column;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card-img-top {
            width: 100%;
            height: 250px;
            object-fit: contain;
        }
        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
            color: #582f0e;
            flex-grow: 1; 
        }
        .card-body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }
        .btn-primary {
            background-color: #582f0e;
            border-color: #582f0e;
            transition: background-color 0.2s, border-color 0.2s;
        }
        .btn-primary:hover {
            background-color: #7a4b2e;
            border-color: #7a4b2e;
        }
    </style>
</head>
<body>
<div class="bg-section">
    <div class="container">
        <h1 class="text-center font-italic bold py-3">Skincare Products</h1>
        <div class="row">
            <?php
            $sql = "SELECT * FROM produk WHERE id_kategori = 4";
            $result = $conn->query($sql);

            if (!$result) {
                echo "<div class='col-12'><p class='text-center text-danger'>Error: " . $conn->error . "</p></div>";
            } else {
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='col-md-4 d-flex align-items-stretch'>";
                        echo "<div class='card mb-4 shadow-sm'>";
                        echo "<img src='" . htmlspecialchars($row["url_gambar"]) . "' class='card-img-top' alt='Product Image'>";
                        echo "<div class='card-body'>";
                        echo "<h5 class='card-title'>" . htmlspecialchars($row["nama_produk"]) . "</h5>";
                        echo "<div class='mt-auto'>";
                        echo "<a href='add_review.php?productId=" . intval($row["id_produk"]) . "&categoryId=4' class='btn btn-primary'>Add Review</a>";
                        echo "<a href='add_review_process.php?productId=" . intval($row["id_produk"]) . "' class='btn btn-secondary'>See Review</a>";
                        echo "</div></div></div></div>";
                    }
                } else {
                    echo "<div class='col-12'><p class='text-center'>No products available.</p></div>";
                }
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
