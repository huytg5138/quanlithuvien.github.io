<?php 
include_once "../_header.php";

// nhận id từ URL
$id = $_GET["id"] ?? "";
if (empty($id)) {
    redirect_to("/admin/books");
}

// Tạo sql select dữ liệu theo id
$sql = "SELECT id, title, author_id, category_id, publish_year, quantity
        FROM books
        WHERE id = ?";
// Thực thi câu select
$data = db_select($sql, [$id]);
// Lấy dòng dữ liệu đầu tiên
$data = $data[0];
?>

<form action="update.php" method="post">
    <input value="<?=$id?>" type="hidden" name="id">
    <label>Tiêu đề</label>
    <input type="text" name="title" value="<?=$data["title"]?>" required />
    <br>
    <label>ID tác giả</label>
    <input type="text" name="author_id" value="<?=$data["author_id"]?>" required />
    <br>
    <label>ID danh mục</label>
    <input type="text" name="category_id" value="<?=$data["category_id"]?>" required />
    <br>
    <label>Năm xuất bản</label>
    <input type="text" name="publish_year" value="<?=$data["publish_year"]?>" required />
    <br>
    <label>Số lượng</label>
    <input type="text" name="quantity" value="<?=$data["quantity"]?>" required />
    <br>
    
    <button>Edit books</button>
</form>

<?php include_once "../_footer.php" ?>