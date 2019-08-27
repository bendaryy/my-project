<html>
    <head></head>
    <body>
        <table border="1">
            <tr>
                <th>Key</th>
                <th>Value</th>
            </tr>
            <?php foreach ($degrees as $r => $v): ?>
                <tr>
                    <td><?= $r ?></td>
                    <td><?= $v ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>
