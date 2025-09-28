<!-- Logic xử lý cập nhật tài khoản -->
<?php
include_once "../../include/common.php";

// Nhận dữ liệu từ form
$id = $_POST["id"] ?? "";
$name = $_POST["name"] ?? "";
$email = $_POST["email"] ?? "";
$phone = $_POST["phone"] ?? "";
$address = $_POST["address"] ?? "";

// Tạo câu truy vấn
$sql = "UPDATE readers
        SET name = ?,
            email = ?,
            phone = ?,
            address = ?  
        WHERE id = ?";
// Gọi hàm để thực thi truy vấn 
db_execute($sql, [
    $name,
    $email,
    $phone,
    $address, 
    $id
]);
// Quay về trang danh sách tài khoản
redirect_to("/admin/readers");