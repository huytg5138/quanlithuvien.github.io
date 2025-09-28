<?php
include_once "../_header.php";

$sql = "SELECT br.id, br.reader_id, br.book_id, br.borrow_date, br.return_date, br.status,
        r.name AS reader_name,
        b.title AS book_title
FROM borrows br
LEFT JOIN readers r ON br.reader_id = r.id
LEFT JOIN books b ON br.book_id = b.id
ORDER BY br.id DESC";

$data = db_select($sql);
?>
<h2>List book borrow</h2>
<a href="create.php">borrowed books</a>
<a href="/qlthuvien/admin" style="margin-left:20px">HOME</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Reader Name</th>
            <th>Book Title</th>
            <th>Borrow Date</th>
            <th>Return Date</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $d): ?>
            <tr>
                <td><?= $d["id"] ?></td>
                <td><?= $d["reader_name"] ?? '' ?></td>
                <td><?= $d["book_title"] ?? '' ?></td>
                <td><?= $d["borrow_date"] ?? '' ?></td>
                <td><?= $d["return_date"] ?? '' ?></td>
                <td><?= $d["status"] ?? 'Chưa cập nhật' ?></td>
                <td>
                    <a href="edit.php?id=<?= $d["id"] ?>">Sửa</a>
                    <a href="delete.php?id=<?= $d["id"] ?>">Xóa</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?php include_once "../_footer.php" ?>