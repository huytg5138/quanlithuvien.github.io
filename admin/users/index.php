    <?php include_once "../_header.php";
    $sql = "SELECT id, username, created_at FROM users  ORDER BY id DESC";
    $data = db_select($sql);
    ?>
    <span>
    <a href="create.php">add account</a>
    <a href="/qlthuvien/admin"  style="margin-left:20px">HOME</a>
    </span>
    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên đăng nhập</th>
                <th>Ngày tạo</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $d): ?>
                <tr>
                    <td><?= $d["id"] ?></td>
                    <td><?= $d["username"] ?></td>
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