<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "we_shine";

// Membuat koneksi
$conn = mysqli_connect($server, $user, $password, $nama_database);

// Memeriksa koneksi
if (!$conn) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

$name = $_POST['name'];
$skinType = $_POST['skinType'];
$usageDuration = $_POST['usageDuration'];
$review = $_POST['review'];

$sql = "INSERT INTO reviews (name, skin_type, usage_duration, review) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $name, $skinType, $usageDuration, $review);

if ($stmt->execute()) {
    echo "New review added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$stmt->close();
$conn->close();

header("Location: recomendation1.php");
exit;
?>
