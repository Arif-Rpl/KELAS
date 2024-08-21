<?php
    require_once("content.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <img src="img/<?=$gambar;?>" alt="" height="200" width="300">
    <img src="img/<?=$gambars[1];?>" alt="" height="200" width="300">
    <?php
    foreach ($gambars as $key) {
        echo "<h1>gambar</h1>";
        echo "<img src='img/$key' alt=''>";
        echo '<img src="img/'. $key .'" alt="">';
    }
    ?>

</body>
</html>