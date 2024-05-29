<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "we_shine";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$sql = "SELECT * FROM profile WHERE id = 1";
$result = $conn->query($sql);
$user = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-danger text-white">
                <h4 class="mb-0">Ubah Profil</h4>
            </div>
            <div class="card-body">
                <?php if ($user): ?>
                    <div class="text-center mb-4">
                        <img src="path_to_profile_image.jpg" class="rounded-circle" alt="Profile Image" width="100">
                        <h5 class="mt-2"><?php echo htmlspecialchars($user['nama']); ?></h5>
                    </div>
                    <form>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" value="<?php echo htmlspecialchars($user['nama']); ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Bio</label>
                            <input type="text" class="form-control" value="<?php echo htmlspecialchars($user['bio']); ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kelamin</label>
                            <input type="text" class="form-control" value="<?php echo htmlspecialchars($user['jenis_kelamin']); ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Tanggal Lahir</label>
                            <input type="text" class="form-control" value="<?php echo date('d-m-Y', strtotime($user['tanggal_lahir'])); ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>No. Handphone</label>
                            <input type="text" class="form-control" value="<?php echo htmlspecialchars($user['no_handphone']); ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" value="<?php echo htmlspecialchars($user['email']); ?>" readonly>
                        </div>
                    </form>
                <?php else: ?>
                    <p class="text-center">Profil tidak ditemukan.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>

<?php
$conn->close();
?>
