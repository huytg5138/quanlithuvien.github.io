<!-- Logic xử lý thêm tài khoản -->
<?php
include_once "../../include/common.php";
// Nhận dữ liệu từ form
$name = $_POST["name"] ?? "";
$biography = $_POST["biography"] ?? "";
$created_at = $_POST["created_at"] ?? "";

// Tạo câu truy vấn
$sql = "INSERT INTO authors(name, biography,created_at)
        VALUES( ?,?,now())";
// Gọi hàm để thực thi truy vấn
db_execute($sql, [ $name,$biography]);
// Quay về trang danh sách tài khoản
redirect_to("/admin/authors");