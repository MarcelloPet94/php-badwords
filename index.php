<?php

$paragrafo = strtolower("Combattere i brevetti uno ad uno non eliminerà mai il pericolo dei brevetti software, così come uccidere le zanzare non significa sconfiggere la malaria");
$censura = $_GET['censura'];

$fraseCensurata = str_replace($censura , "***" , $paragrafo)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>
    <?php
        echo $fraseCensurata;
    ?>
</h1>
    
</body>
</html>

