<?php 
include_once "../../include/common.php";
// Nhận dữ liệu từ form
$id = $_POST["id"] ?? "";
$reader_id = $_POST["reader_id"] ?? "";
$book_id = $_POST["book_id"] ?? "";
$borrow_date = $_POST["borrow_date"] ?? "";
$return_date = $_POST["return_date"] ?? "";
$status = $_POST["status"] ?? "";
$sql = "UPDATE borrows 
        SET reader_id = ?, 
        book_id = ?, 
        borrow_date = ?, 
        return_date = ?,
        status = ?
        WHERE id = ?";
    // Gọi hàm để thực thi truy vấn
    db_execute($sql, [
        $reader_id,
        $book_id,
        $borrow_date,
        $return_date,
        $status,
        $id
    ]);
// Quay về trang danh sách sản phẩm
redirect_to("/admin/borrows");
?>