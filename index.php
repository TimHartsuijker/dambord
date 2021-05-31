<!doctype html>
<html lang="en">
<head>
    <title>dambord</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

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
<div class="stenen">
    <?php
    $id= 1;
    for ($j = 1; $j <= 4; $j++) {
        if ($j % 2 == 0) {
            for ($kolom = 1; $kolom <= 5; $kolom++) {
                for ($rows = 1; $rows <= 1; $rows++) {
                    ?>
                    <div class="steenZwart" id="<?=$id?>"></div>
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
                    <div class="steenZwart" id="<?=$id?>"></div>
                    <?php
                    $id++;
                }
            }
            ?>
            <br>
            <?php
        }
    }
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
    ?>
    <?php
    for ($j = 1; $j <= 4; $j++) {
        if ($j % 2 == 0) {
            for ($kolom = 1; $kolom <= 5; $kolom++) {
                for ($rows = 1; $rows <= 1; $rows++) {
                    ?>
                    <div class="steenWit"  id="<?=$id?>"></div>
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
                    <div class="steenWit"  id="<?=$id?>"></div>
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
</body>
</html>