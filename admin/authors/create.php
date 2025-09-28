<?php include_once "../_header.php" ?>

<form action="insert.php" method="post">
    <label>Tác giả</label>
    <input type="text" name="name" />
    <br>
    <label>Tiểu sử</label>
    <input type="text" name="biography" />
    <br>
    <label>Ngày thêm</label>
    <input type="date" name="created_at" />
    <br>
    <button>Thêm tác giả</button>
</form>
<?php include_once "../_footer.php" ?>