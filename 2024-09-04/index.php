<?php
    $judul = "Belajar Php";
    $judul1 = "Siswa RPL";
    $judul2 = "SMKN 2 BUDURAN";
    $Juduls = ["Belajar php", "Siswa RPL", "SMKN 2 BUDURAN"];

    echo $Juduls[2];
    for ($i=0; $i < 3; $i++) { 
        echo "<br>";
        echo $i;
        echo $Juduls[$i];
    }

    foreach ($Juduls as $key) {
        echo "<br>";
        echo $key;
    }
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= $judul?></h1>
    <h2><?= $judul1?></h2>
    <h3><?= $judul2?></h3>
    <h4><?php echo $judul?></h4>

    <h1><?= $Juduls[1]?></h1>
    <H2><?= $Juduls[0]?></H2>

    <?php
        for ($i=0; $i < 3; $i++) { 
            echo "<h1>";
            echo $Juduls[$i];
            echo "</h1>";
        }
    ?>

    <h1>Menampilkan php</h1>
<?php
    for ($i=0; $i < 3; $i++) { 
            ?>
            <h1><?= $Juduls[$i];?></h1>
            <?php   
    }
?>
    <?php
        foreach ($Juduls as $key) {
            echo "<h2>";
            echo $key;
            echo "</h2>";
            echo "<br>";
        }
    ?>
    <?php
        foreach ($Juduls as $key) {
            ?> 
            <h2><?= $key?></h2>
            <?php
        }
    ?>
    
    <?php
        for ($i=1; $i < 10; $i++) { 
            echo "<h$i>";
            echo "SMKN 2 BUDURAN";
            echo "</h$i>";
        }
    ?>

    <?php
    for ($i=6; $i > 0; $i-) { 
        echo "<h$i>"."SMKN 2 BUDURAN"."</h$i>";
    }
    ?>
</body>
</html>