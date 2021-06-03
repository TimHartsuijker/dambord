<!doctype html>
<html lang="en">
<head>
    <title>dambord</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<!--hier wordt het bord gemaakt-->
<div class="bord">
    <?php
    require 'functions.php';
    for ($kolom = 1; $kolom <= 10; $kolom++) {
        if ($kolom % 2 == 0) {
            for ($rows = 1; $rows <= 10; $rows++) {
                if ($rows % 2 == 0) {
                    ?>
                    <div class="box1"></div>
                    <?php
                } else {
                    ?>
                    <div class="box2"></div>
                    <?php
                }
            }
        } else {
            for ($rows = 1; $rows <= 10; $rows++) {
                if ($rows % 2 == 0) {
                    ?>
                    <div class="box2"></div>
                    <?php

                } else {
                    ?>
                    <div class="box1"></div>
                    <?php
                }
            }
        }
        echo "<br>";
    }
    ?>
</div>
<!--hier worden de stenen geplaatst-->
<div class="stenen">
    <?php
    //zwarte stenen bovenaan
    $id= 1;
    for ($j = 1; $j <= 4; $j++) {
        if ($j % 2 == 0) {
            for ($kolom = 1; $kolom <= 5; $kolom++) {
                for ($rows = 1; $rows <= 1; $rows++) {
                    ?>
                    <a href="index.php?id=<?= $id?>" class="steenZwart" id="<?=$id?>"></a>
                    <div class="steenLeeg"></div>
                    <?php
                    $id++;
                }
            }
            ?>
            <br>
            <?php
        } else {
            for ($kolom = 1; $kolom <= 5; $kolom++) {
                for ($rows = 1; $rows <= 1; $rows++) {
                    ?>
                    <div class="steenLeeg"></div>
                    <a href="index.php?id=<?= $id?>" class="steenZwart" id="<?=$id?>"></a>
                    <?php
                    $id++;
                }
            }
            ?>
            <br>
            <?php
        }
    }
    //lege vakjes in het midden
    for ($i = 1; $i <= 2; $i++) {
        for ($kolom = 1; $kolom <= 5; $kolom++) {
            for ($rows = 1; $rows <= 2; $rows++) {
                ?>
                <div class="steenLeeg"></div>
                <?php
            }
        }
        ?>
        <br>
        <?php
    }
  //witte stenen onderaan
    for ($j = 1; $j <= 4; $j++) {
        if ($j % 2 == 0) {
            for ($kolom = 1; $kolom <= 5; $kolom++) {
                for ($rows = 1; $rows <= 1; $rows++) {
                    ?>
                    <a href="index.php?id=<?= $id?>" class="steenWit"  id="<?=$id?>"></a>
                    <div class="steenLeeg"></div>
                    <?php
                    $id++;
                }
            }
            ?>
            <br>
            <?php
        } else {
            for ($kolom = 1; $kolom <= 5; $kolom++) {
                for ($rows = 1; $rows <= 1; $rows++) {
                    ?>
                    <div class="steenLeeg"></div>
                    <a href="index.php?id=<?= $id?>" class="steenWit" id="<?=$id?>"></a>
                    <?php
                    $id++;
                }
            }
            ?>
            <br>
            <?php
        }
    }
    ?>
</div>
<?php
//laat het id van de aangeklikte steen zien
if(isset($_GET['id'])){
    echo "het id van de aangeklikte steen is " . $_GET['id'];
}

?>
</body>
</html>