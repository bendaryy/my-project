<?php include("../View/header.php"); ?>
<?php if ($re['success']): ?>
    <?= $re['total'] ?> products.<br/>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Category</th>
            <th>Picture</th>
            <th colspan="3">Actions</th>
        </tr>
        <?php foreach ($re['records'] as $r): ?>
            <tr>
                <td><?= $r['id'] ?></td>
                <td><?= $r['name'] ?></td>
                <td><?= $r['category_name'] ?></td>
                <td>
                    <img
                        style="width:50px;"
                        src="<?= $r['picture_path'] ?>" />
                </td>
                <td>
                    <a href="edit_product_form.php?id=<?= $r['id'] ?>">Edit</a>
                </td>
                <td>
                    <a href="delete_product.php?id=<?= $r['id'] ?>">Delete</a>
                </td>
                <td>
                    <a href="view_product.php?id=<?= $r['id'] ?>">View</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <?= $re['total'] ?> products.<br/>
    <a href="new_product_form.php">Add New Product</a>
<?php else: ?>
    Error Number : <?= $re['error_number'] ?><br />
    Error Message : <?= $re['error_message'] ?> <br />
<?php endif; ?>
<?php include("../View/footer.php"); ?>