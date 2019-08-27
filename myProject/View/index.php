<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div 
            style="
            background-color: <?= $bg_color ?>;
            color: <?= $text_color ?>
            ">
            Welcome <?= $title ?> <?= $full_name ?><br />
            Your favorite color is : <?= $bg_color ?><br />

            Your birth year : <?= $year_of_birth ?> <br />
            Your are 
            <?= $ageArray['years'] ?> years,
            <?= $ageArray['months'] ?> months and 
            <?= $ageArray['days'] ?> days old.<br />
            Your Lucky Number is : <?= $lucky_number ?><br />
            Digits Count : <?= $lucky_number_array['count'] ?><br/>
            Digits Sum: <?= $lucky_number_array['sum'] ?><br />
            Digits are :
            <?php foreach ($lucky_number_array['digits'] as $d): ?>
                <?= $d ?>
            <?php endforeach; ?>
            <br />

            <?php if (count($interests) > 0): ?>
                You are interested in <?= count($interests) ?> : 
                <ul>
                    <?php foreach ($interests as $i): ?> 
                        <li><?= $i ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php else: ?>
                You did not choose any interests.
            <?php endif; ?>
            <br />
            <?php if ($uploadResult === true): ?>
                File Uploaded Successfully.
            <?php else: ?>
                <?= $uploadResult ?>
            <?php endif; ?>
        </div>
        <div style="
             height: 100px;
             width: 100px;
             background-color: <?= $bg_color2 ?>;
             color: <?= $text_color2 ?>;
             ">
            Welcome
        </div>
    </body>
</html>
