<?php include("../View/header.php"); ?>
<form action="insert_category.php" method="POST">
    <table>
        <tr>
            <th>Name : </th>
            <td>
                <input type="text" name="name" />
            </td>
        </tr>
        <tr>
            <th>Description : </th>
            <td>
                <textarea name="description"></textarea>
            </td>
        </tr>
        <tr>
            <th colspan="2">
                <input type="submit" value="Add Category" />
            </th>
        </tr>
    </table>
</form>
<?php include("../View/footer.php"); ?>