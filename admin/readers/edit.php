<?php 
include_once "../_header.php";

// nhận id từ URL
$id = $_GET["id"] ?? "";
if (empty($id)) {
    redirect_to("/admin/readers");
}

// Tạo sql select dữ liệu theo id
$sql = "SELECT id, name ,email ,phone , address
        FROM readers
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
    <label>email</label>
    <input type="text" name="email" value="<?=$data["email"]?>" required />
    <br>
    <label>number-phone</label>
    <input type="text" name="phone" value="<?=$data["phone"]?>" required />
    <br>
    <label>address</label>
    <input type="text" name="address" value="<?=$data["address"]?>" required />
    <br>
    <button>edit readers</button>
</form>

<?php include_once "../_footer.php" ?>