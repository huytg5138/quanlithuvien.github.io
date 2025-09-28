<?php include_once "../_header.php" ?>

<form action="insert.php" method="post">
    <label>Tên độc giả</label>
    <input type="text" name="name" />
    <br>
    <label>Email</label>
    <input type="text" name="email" />
    <br>
    <label>Phone</label>
    <input type="tel" name="phone" />
    <br>
    <label>Address</label>
    <input type="text" name="address" />
    <br>
    <label>Ngày thêm</label>
    <input type="date" name="created_at" />
    <br>
    <button>Thêm độc giả</button>
</form>
<?php include_once "../_footer.php" ?>