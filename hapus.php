<?php
require 'koneksi.php';

$id = (int)($_GET['id'] ?? 0);

if ($id <= 0) {
    die("ID tidak valid.");
}

if (!mysqli_query($conn, "DELETE FROM users WHERE id=$id")) {
    die("Gagal menghapus data: " . mysqli_error($conn));
}

header("Location: index.html");
exit;
?>
