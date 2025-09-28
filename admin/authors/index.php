    <?php include_once "../_header.php";
    $sql = "SELECT id, name,biography, created_at FROM authors  ORDER BY id DESC";
    $data = db_select($sql);
    ?>
    <span>
    <a href="create.php">add authors</a>
    <a href="/qlthuvien/admin"  style="margin-left:20px">HOME</a>
    </span>
    </div>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>name</th>
                <th>biography</th>
                <th>created_at</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($data as $d): ?>
                <tr>
                    <td><?= $d["id"] ?></td>
                    <td><?= $d["name"] ?></td>
                    <td><?= $d["biography"] ?></td>
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