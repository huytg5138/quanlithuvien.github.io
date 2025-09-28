<?php include_once "../_header.php";
$sql = "SELECT id, name, email, phone, address, created_at FROM readers  ORDER BY id DESC";
$data = db_select($sql);
?>
<span>
    <a href="create.php">Add readers</a>
    <a href="/qlthuvien/admin" style="margin-left:20px">HOME</a>
</span>
</div>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>email</th>
            <th>Phone</th>
            <th>address</th>
            <th>created_at</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $d): ?>
            <tr>
                <td><?= $d["id"] ?></td>
                <td><?= $d["name"] ?></td>
                <td><?= $d["email"] ?></td>
                <td><?= $d["phone"] ?></td>
                <td><?= $d["address"] ?></td>
                <td><?= $d["created_at"] ?></td>
                <td>
                    <a href="edit.php?id=<?= $d["id"] ?>">Sửa</a>
                    <a href="delete.php?id=<?= $d["id"] ?>">Xóa</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?php include_once "../_footer.php" ?>