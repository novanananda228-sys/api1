<?php
$conn = mysqli_connect("localhost", "root", "", "data_api");

if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
mysqli_set_charset($conn, "utf8mb4");
?>
