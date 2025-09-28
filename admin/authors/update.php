<!-- Logic xử lý cập nhật tài khoản -->
<?php
include_once "../../include/common.php";

// Nhận dữ liệu từ form
$id = $_POST["id"] ?? "";
$name = $_POST["name"] ?? "";
$biography = $_POST["biography"] ?? "";


// Tạo câu truy vấn
$sql = "UPDATE authors
        SET name = ?,
            biography = ?
        WHERE id = ?";
// Gọi hàm để thực thi truy vấn 
db_execute($sql, [
    $name,
    $biography,
    $id
]);
// Quay về trang danh sách tài khoản
redirect_to("/admin/authors");