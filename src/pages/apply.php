<?php
// apply.php

$connection = new PDO("mysql:host=localhost;dbname=simpleapplyingapp", 'root', '');

$result = $connection->query('SELECT * FROM jobs WHERE id =' . $request->attributes->get('id'));
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Applying</title>
    </head>
    <body>
        <h1>You're applying. Do not close the tab.</h1>
        
        <p>
        <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
            <h3><?=$row['title']?></h3>
            <a target="_blank" href="<?=$row['apply']?>">Apply Now</a>
        <?php endwhile ?>
        </p>
    </body>
</html>

<?php
$connection = null;
?>