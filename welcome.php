<?php
// Check if name or email is empty
if (empty($_POST['nama']) || empty($_POST['email'])) {
    header("Location: error.php");
    exit();
}

// Get form data
$nama = htmlspecialchars($_POST['nama']);
$email = htmlspecialchars($_POST['email']);

// Set timezone and get date/time
date_default_timezone_set('Asia/Jakarta');
$jam = date('H:i:s');
$hari = date('l');
$tanggal = date('d F Y');

// Convert day to Indonesian
$hari_indonesia = [
    'Sunday' => 'Minggu',
    'Monday' => 'Senin',
    'Tuesday' => 'Selasa',
    'Wednesday' => 'Rabu',
    'Thursday' => 'Kamis',
    'Friday' => 'Jumat',
    'Saturday' => 'Sabtu'
];
$hari = $hari_indonesia[$hari];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <style>
        .welcome-card {
            max-width: 600px;
            margin: 50px auto;
        }
    </style>
</head>
<body class="bg-light">
    <div class="container">
        <div class="card welcome-card shadow">
            <div class="card-header bg-primary text-white">
                <h3 class="text-center">Selamat Datang, <?= $nama ?></h3>
            </div>
            <div class="card-body">
                <div class="alert alert-info">
                    <h4 class="alert-heading">Informasi Login</h4>
                    <hr>
                    <ul class="list-group">
                        <li class="list-group-item"><strong>Nama:</strong> <?= $nama ?></li>
                        <li class="list-group-item"><strong>Email:</strong> <?= $email ?></li>
                        <li class="list-group-item"><strong>Jam Login:</strong> <?= $jam ?></li>
                        <li class="list-group-item"><strong>Hari:</strong> <?= $hari ?></li>
                        <li class="list-group-item"><strong>Tanggal:</strong> <?= $tanggal ?></li>
                    </ul>
                </div>
                <a href="index.html" class="btn btn-primary">Kembali ke Login</a>
            </div>
        </div>
    </div>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>