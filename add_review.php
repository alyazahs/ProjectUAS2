<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "we_shine";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
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