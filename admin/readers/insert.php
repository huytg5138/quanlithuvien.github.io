<!-- Logic xử lý thêm tài khoản -->
<?php
include_once "../../include/common.php";
// Nhận dữ liệu từ form
$name = $_POST["name"] ?? "";
$email = $_POST["email"] ?? "";
$phone = $_POST["phone"] ?? "";
$address = $_POST["address"] ?? "";
$created_at = $_POST["created_at"] ?? "";

// Tạo câu truy vấn
$sql = "INSERT INTO readers(name, email, phone, address, created_at)
        VALUES( ?,?, ?, ?,now())";
// Gọi hàm để thực thi truy vấn
db_execute($sql, [ $name,$email, $phone, $address]);
// Quay về trang danh sách tài khoản
redirect_to("/admin/readers");