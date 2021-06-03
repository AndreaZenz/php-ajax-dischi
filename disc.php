<?php
include "C:\MAMP\htdocs\php-ajax-dischi\data.php"

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/app.css">
    <title>dischi</title>
</head>

<body>
    <div class="flex">
    <?php
    foreach ($disc as $albums) {
        $poster = $albums["poster"]
    ?>
        <div class="container">
            <div class="album">
                <div class="albumPoster">
                    <?php echo "<img src='$poster' </img>" ?>
                </div>
                <h1> <?php echo $albums["title"] ?> </h1>
                <h3><?php echo $albums["author"] ?></h3>
                <small><?php echo $albums["genre"] ?></small>
                <small><?php echo $albums["year"] ?></small>
            </div>
        </div>
    <?php
    }
    ?>

    </div>
</body>

</html>