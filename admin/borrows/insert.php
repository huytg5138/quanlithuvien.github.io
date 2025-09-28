<?php
include_once "../../include/common.php";

$reader_id = $_POST["reader_id"] ?? "";
$book_id = $_POST["book_id"] ?? "";
$borrow_date = $_POST["borrow_date"] ?? "";
$return_date = $_POST["return_date"] ?? "";
$status = $_POST["status"] ?? "";

$sql = "INSERT INTO borrows(reader_id, book_id, borrow_date, return_date, status)
        VALUES(?, ?, ?, ?, ? )";
db_execute($sql, [$reader_id, $book_id, $borrow_date, $return_date, $status]);

redirect_to("/admin/borrows");