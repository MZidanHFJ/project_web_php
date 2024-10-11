<?php
$conn = new mysqli("localhost", "root", "", "zidan-pertemuan2");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>