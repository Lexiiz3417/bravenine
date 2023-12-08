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