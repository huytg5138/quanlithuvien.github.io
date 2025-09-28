<?php
include_once "../_header.php";

// nhận id từ URL
$id = $_GET["id"] ?? "";
if (empty($id)) {
    redirect_to("/admin/borrows");
}

// Tạo sql select dữ liệu theo id
$sql = "SELECT reader_id, book_id, borrow_date, return_date, status
        FROM borrows
        WHERE id = ?";
// Thực thi câu select
$data = db_select($sql, [$id]);
// Lấy dòng dữ liệu đầu tiên
$data = $data[0];
?>

<form action="update.php" method="post">
    <input value="<?= $id ?>" type="hidden" name="id">
    <label>ID người mượn</label>
    <input type="text" name="reader_id" value="<?= $data["reader_id"] ?>" required />
    <br>
     <label>ID sách</label>
    <input type="text" name="book_id" value="<?=$data["book_id"]?>" required />
    <br>
    <label>Ngày mượn</label>
    <input type="text" name="borrow_date" value="<?=$data["borrow_date"]?>" required />
    <br>

    <br>
    <label>Ngày trả</label>
    <input type="text" name="return_date" value="<?= $data["return_date"] ?>" required />
    <br>
    <label>Status</label>
    <input type="text" name="status" value="<?= $data["status"] ?>" required />
    <br>

    <button>Edit </button>
</form>

<?php include_once "../_footer.php" ?>