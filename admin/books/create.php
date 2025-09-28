<?php include_once "../_header.php" ?>

<form action="insert.php" method="post">
    <label>Tiêu đề</label>
    <input type="text" name="title" />
    <br>

    <label> ID Tác giả</label>
    <input type="number" name="author_id" />
    <br>
    <label> ID Danh mục</label>
    <input type="number" name="category_id" />
    <br>

    <label>Năm xuất bản</label>
    <input type="text" name="publish_year" />
    <br>
    <label>Số lượng</label>
    <input type="number" name="quantity" />
    <br>
    <button>Thêm Sách</button>
</form>
<?php include_once "../_footer.php" ?>