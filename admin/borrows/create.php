<?php include_once "../_header.php" ?>

<form action="insert.php" method="post">
    <label>Người mượn</label>
    <select name="reader_id">
        <?php gen_option_ele('readers', 'id', 'name') ?>
    </select>
    <br>

    <label>Sách</label>
    <select name="book_id">
        <?php gen_option_ele('books', 'id', 'title') ?>
    </select>
    <br>

    <label>Ngày mượn</label>
    <input type="date" name="borrow_date" required />
    <br>

    <label>Ngày trả</label>
    <input type="date" name="return_date" required />
    <br>

    <label>Status</label>
    <input type="text" name="status" />
    <br>

    <button>Thêm Phiếu Mượn Sách</button>
</form>

<?php include_once "../_footer.php" ?>
