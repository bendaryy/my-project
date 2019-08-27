<?php include("../View/header.php"); ?>
<form action="update_category.php" method="POST">
    <table>
        <tr>
            <th>ID : </th>
            <td>
                <?= $re['record']['id'] ?>
                <input type="hidden" name="id" value="<?= $re['record']['id'] ?>"/>
            </td>
        </tr>
        <tr>
            <th>Name : </th>
            <td>
                <input type="text" name="name" value="<?= $re['record']['name'] ?>"/>
            </td>
        </tr>
        <tr>
            <th>Description : </th>
            <td>
                <textarea name="description"><?= $re['record']['description'] ?></textarea>
            </td>
        </tr>
        <tr>
            <th colspan="2">
                <input type="submit" value="Save Changes" />
            </th>
        </tr>
    </table>
</form>
<?php include("../View/footer.php"); ?>