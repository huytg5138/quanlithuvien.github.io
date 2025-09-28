<?php
include_once "../_header.php";

$sql = "SELECT 
            b.id, 
            b.title, 
            b.author_id,
            b.category_id,
            b.publish_year,
            a.name AS author_name,
            c.name AS category_name
        FROM books b
        LEFT JOIN authors a
            ON b.author_id = a.id
        LEFT JOIN categories c
            ON b.category_id = c.id
        ORDER BY b.id DESC";
//dd($data);
$data = db_select($sql);
?>
<h2>List book</h2>
<a href="create.php">add books</a>
<a href="/qlthuvien/admin"  style="margin-left:20px">HOME</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>title</th>
            <th>author_id</th>
            <th>category_id</th>
            <th>publish_year</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($data as $d): ?>
            <tr>
                <td><?= $d["id"] ?></td>
                <td><?= $d["title"] ?></td>
                <td><?= $d["author_id"] ?></td>
                <td><?= $d["category_id"] ?></td>
                <td><?= $d["publish_year"] ?></td>
                <td></td>
                <td>
                    <a href="edit.php?id=<?= $d["id"] ?>">Sửa</a>
                    <a href="delete.php?id=<?= $d["id"] ?>">Xóa</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?php include_once "../_footer.php" ?>