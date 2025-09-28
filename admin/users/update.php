<!-- Logic xử lý cập nhật tài khoản -->
<?php
include_once "../../include/common.php";

// Nhận dữ liệu từ form
$id = $_POST["id"] ?? "";
$username = $_POST["username"] ?? "";
$password = $_POST["password"] ?? "";

if (empty($password)) {
    $sql = "UPDATE users
            SET username = ?
            WHERE id = ?";
    db_execute($sql, [$username, $id]);
} else {
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $sql = "UPDATE users
        SET username = ?, password = ?
        WHERE id = ?";
    db_execute($sql, [$username, $hash, $id]);
}

// Quay về trang danh sách tài khoản
redirect_to("/admin/users");