<?php
$servername = "127.0.0.1";  // Đảm bảo bạn kết nối với localhost
$database = "qlyphongtro";   // Đổi tên cơ sở dữ liệu thành qlyphongtro
$username = "root";
$password = "NguyenKhiem291204";

// Tạo kết nối
$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
?>