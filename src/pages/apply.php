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
        <h1>You're applying</h1>
        
        <p>
        <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)): ?>
            <a target="_blank" href="<?=$row['apply']?>">Apply Now</a>
        <?php endwhile ?>
        </p>
    </body>
</html>

<?php
$connection = null;
?>