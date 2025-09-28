<?php
include_once "../_header.php";

// nhận id từ URL
$id = $_GET["id"] ?? "";
if (empty($id)) {
    redirect_to("/admin/categories");
}

// Tạo sql select dữ liệu theo id
$sql = "SELECT id, name, description
        FROM categories
        WHERE id = ?";
// Thực thi câu select
$data = db_select($sql, [$id]);
// Lấy dòng dữ liệu đầu tiên
$data = $data[0];
?>

<form action="update.php" method="post">
    <input value="<?= $id ?>" type="hidden" name="id">
    <label>Tên truyện</label>
    <input type="text" name="name" value="<?= $data["name"] ?>" required />
    <br>
    <label>Thể loại</label>
    <input type="text" name="description" value="<?= $data["description"] ?>" required />
    <br>

    <button>Edit</button>
</form>

<?php include_once "../_footer.php" ?>