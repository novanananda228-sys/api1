<?php
require 'koneksi.php';

$id = (int)($_POST['id'] ?? 0);
$name = mysqli_real_escape_string($conn, $_POST['name'] ?? '');
$username = mysqli_real_escape_string($conn, $_POST['username'] ?? '');
$email = mysqli_real_escape_string($conn, $_POST['email'] ?? '');
$address = mysqli_real_escape_string($conn, $_POST['address'] ?? '');

$sql = "UPDATE users SET
        name='$name',
        username='$username',
        email='$email',
        address='$address'
        WHERE id=$id";

if (!mysqli_query($conn, $sql)) {
    die("Gagal mengubah data: " . mysqli_error($conn));
}

header("Location: index.html");
exit;
?>
