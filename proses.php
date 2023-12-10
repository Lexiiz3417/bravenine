<?php
$allowed_password = "sandi123";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $input_password = isset($_POST["password"]) ? $_POST["password"] : "";

    if ($input_password === $allowed_password) {
        header("Location: halaman_terkunci.html");
        exit();
    } else {
        header("Location: index.html");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Terkunci</title>
</head>
<body>
    <h2>Selamat datang di Halaman Terkunci!</h2>
    <!-- Konten halaman terkunci -->
</body>
</html>