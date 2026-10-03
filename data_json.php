<?php
header('Content-Type: application/json; charset=utf-8');
require 'koneksi.php';

$result = mysqli_query($conn, "SELECT id, name, username, email, address FROM users ORDER BY id ASC");
$data = [];

while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

echo json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
?>
