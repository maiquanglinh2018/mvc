<?php
// Kết nối cơ sở dữ liệu
$conn = new mysqli("localhost", "username", "password", "database_name");

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Lấy dữ liệu từ form
$ten_sp = $_POST['ten_sp'];
$gia = $_POST['gia'];

// Chuẩn bị truy vấn SQL
$sql = "INSERT INTO product (ten_sp, gia) VALUES ('$ten_sp', '$gia')";

// Thực hiện truy vấn
if ($conn->query($sql) === TRUE) {
    echo "Thêm sản phẩm thành công!";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

// Đóng kết nối
$conn->close();
?>