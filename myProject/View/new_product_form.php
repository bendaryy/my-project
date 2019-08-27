<?php include("../View/header.php"); ?>
<form action="insert_product.php" method="POST" enctype="multipart/form-data">
    <table>
        <tr>
            <th>Category : </th>
            <td>
                <select name="category_id">
                    <option selected="selected" disabled="disabled">--CATEGORY--</option>
                    <?php foreach ($categories_re['records'] as $category): ?>
                        <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <th>Brand : </th>
            <td>
                <select name="brand_id">
                    <option selected="selected" disabled="disabled">--BRAND--</option>
                    <?php foreach ($brands_re['records'] as $brand): ?>
                        <option value="<?= $brand['id'] ?>"><?= $brand['name'] ?></option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <th>Name : </th>
            <td>
                <input type="text" name="name" />
            </td>
        </tr>
        <tr>
            <th>Quantity : </th>
            <td>
                <input type="text" name="quantity" />
            </td>
        </tr>
        <tr>
            <th>Description : </th>
            <td>
                <textarea name="description"></textarea>
            </td>
        </tr>
        <tr>
            <th>Picture : </th>
            <td>
                <input type="file" name="picture" />
            </td>
        </tr>
        <tr>
            <th>Expiry Date</th>
            <td>
                <input type="text" name="expiry_date" />
            </td>
        </tr>
        <tr>
            <th colspan="2">
                <input type="submit" value="Add Product" />
            </th>
        </tr>
    </table>
</form>
<?php include("../View/footer.php"); ?>