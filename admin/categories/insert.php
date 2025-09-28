<!-- Logic xử lý thêm tài khoản -->
<?php
include_once "../../include/common.php";
// Nhận dữ liệu từ form
$name = $_POST["name"] ?? "";
$description = $_POST["description"] ?? "";


// Tạo câu truy vấn
$sql = "INSERT INTO categories(name, description)
        VALUES( ?, ?)";
// Gọi hàm để thực thi truy vấn
db_execute($sql, [ $name,$description]);
// Quay về trang danh sách tài khoản
redirect_to("/admin/categories");

