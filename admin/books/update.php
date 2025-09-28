<?php 
include_once "../../include/common.php";

// Nhận dữ liệu từ form
$id = $_POST["id"] ?? "";
$title = $_POST["title"] ?? "";
$author_id = $_POST["author_id"] ?? "";
$category_id = $_POST["category_id"] ?? "";
$publish_year = $_POST["publish_year"] ?? "";
$sql = "UPDATE books 
        SET title = ?, 
        author_id = ?, 
        category_id = ?, 
        publish_year = ?
        WHERE id = ?";
    // Gọi hàm để thực thi truy vấn
    db_execute($sql, [
        $title,
        $author_id,
        $category_id,
        $publish_year,
        $id
    ]);
// Quay về trang danh sách sản phẩm
redirect_to("/admin/books");
?>