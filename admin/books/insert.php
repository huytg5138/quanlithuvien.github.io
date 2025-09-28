<?php
include_once "../../include/common.php";

$title = $_POST["title"] ?? "";
$author_id = $_POST["author_id"] ?? "";
$category_id = $_POST["category_id"] ?? "";
$publish_year = $_POST["publish_year"] ?? null;

$sql = "INSERT INTO books(title, author_id, category_id, publish_year)
        VALUES(?, ?, ?, ?)";
db_execute($sql, [$title, $author_id, $category_id, $publish_year]);

redirect_to("/admin/books");
