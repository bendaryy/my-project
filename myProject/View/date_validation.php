
<html>
    <head></head>
    <body>
        <?php if (!$valid) : ?>
            <h2>Invalid Date</h2>
        <?php else : ?>
            Day : <?= $day_of_birth ?><br />
            Month : <?= $month ?><br />
            Year : <?= $year ?><br />
            <h2>Valid Date</h2>
        <?php endif; ?>
    </body>
</html>