<?php 
include_once "../_header.php";

// nhận id từ URL
$id = $_GET["id"] ?? "";
if (empty($id)) {
    redirect_to("/admin/authors");
}

// Tạo sql select dữ liệu theo id
$sql = "SELECT id, name, biography
        FROM authors
        WHERE id = ?";
// Thực thi câu select
$data = db_select($sql, [$id]);
// Lấy dòng dữ liệu đầu tiên
$data = $data[0];
?>

<form action="update.php" method="post">
    <input value="<?=$id?>" type="hidden" name="id">
    <label>first name</label>
    <input type="text" name="name" value="<?=$data["name"]?>" required />
    <br>
    <label>Bio</label>
    <input type="text" name="biography" value="<?=$data["biography"]?>" required />
    <br>
    
    <button>Edit authors</button>
</form>

<?php include_once "../_footer.php" ?>