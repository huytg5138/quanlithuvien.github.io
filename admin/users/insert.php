<!-- Logic xử lý thêm tài khoản -->
<?php
include_once "../../include/common.php";

// Nhận dữ liệu từ form
$username = $_POST["username"] ?? "";
$password = $_POST["password"] ?? "";

// BCrypt hash
$hashed = password_hash($password, PASSWORD_DEFAULT);

// Tạo câu truy vấn
$sql = "INSERT INTO users(username, password, created_at)
        VALUES(?, ?, now())";

// Gọi hàm để thực thi truy vấn
db_execute($sql, [$username, $hashed]);

// Quay về trang danh sách tài khoản
redirect_to("/admin/users");