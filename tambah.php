<?php
require 'koneksi.php';

$name = mysqli_real_escape_string($conn, $_POST['name'] ?? '');
$username = mysqli_real_escape_string($conn, $_POST['username'] ?? '');
$email = mysqli_real_escape_string($conn, $_POST['email'] ?? '');
$address = mysqli_real_escape_string($conn, $_POST['address'] ?? '');

if ($name === '' || $username === '' || $email === '' || $address === '') {
    die("Semua data wajib diisi.");
}

$next = mysqli_query($conn, "SELECT COALESCE(MAX(id), 0) + 1 AS next_id FROM users");
$next_id = mysqli_fetch_assoc($next)['next_id'];

$sql = "INSERT INTO users (id, name, username, email, address)
        VALUES ('$next_id', '$name', '$username', '$email', '$address')";

if (!mysqli_query($conn, $sql)) {
    die("Gagal menambah data: " . mysqli_error($conn));
}

header("Location: index.html");
exit;
?>
