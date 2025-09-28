<!-- Logic xử lý cập nhật tài khoản -->
<?php
include_once "../../include/common.php";

// Nhận dữ liệu từ form
$id = $_POST["id"] ?? "";
$name = $_POST["name"] ?? "";
$description = $_POST["description"] ?? "";


// Tạo câu truy vấn
$sql = "UPDATE categories
        SET name = ?,
            description = ?
        WHERE id = ?";
// Gọi hàm để thực thi truy vấn 
db_execute($sql, [
    $name,
    $description,
    $id
]);
// Quay về trang danh sách tài khoản
redirect_to("/admin/categories");