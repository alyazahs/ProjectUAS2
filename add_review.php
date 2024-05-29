<?php include 'config.php'; // Include database connection file ?>
<?php include 'navbar.php'; ?>

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
        <div class="form-group">
            <label for="productName">Product Name</label>
            <select class="form-control" id="productName" name="productId">
                <?php
                $sql = "SELECT id_produk, nama_produk FROM produk";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row["id_produk"] . "'>" . $row["nama_produk"] . "</option>";
                    }
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="userName">Your Name</label>
            <input type="text" class="form-control" id="userName" name="name" required>
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