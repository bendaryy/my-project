<?php include("../View/header.php"); ?>
<?php if ($re['success']): ?>
    <?= $re['total'] ?> categories.<br/>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th colspan="2">Actions</th>
        </tr>
        <?php foreach ($re['records'] as $r): ?>
            <tr>
                <td><?= $r['id'] ?></td>
                <td><?= $r['name'] ?></td>
                <td><?= $r['description'] ?></td>
                <td>
                    <a href="edit_category_form.php?id=<?= $r['id'] ?>">Edit</a>
                </td>
                <td>
                    <a href="delete_category.php?id=<?= $r['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <?= $re['total'] ?> categories.<br/>
    <a href="new_category_form.php">Add New Category</a>
<?php else: ?>
    Error Number : <?= $re['error_number'] ?><br />
    Error Message : <?= $re['error_message'] ?> <br />
<?php endif; ?>
<?php include("../View/footer.php"); ?>