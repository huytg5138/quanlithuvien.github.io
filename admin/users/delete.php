
<?php
include_once "../../include/common.php";

// Nhận id từ URL
$id = $_GET["id"] ?? "";

if (empty($id)){
    redirect_to("/admin/users");
}

// Tạo câu query
$sql = "DELETE FROM users WHERE id=?";

// Thực thi câu query
db_execute($sql, [$id]);

// Quay về trang danh sách tài khoản
redirect_to("/admin/users");