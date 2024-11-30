<?php 
//Variables

$name = "German";
$isPO = true;
$age = 3;

$itsOld = $age > 40;



$intro = "Buenas tardes, mi nombre es $name y tengo $age";

//Constantes globales

define('Logo_URL', 'https://cdn.freebiesupply.com/images/large/2x/star-shape.jpg');

//Constantes locales
const NOMBRE = 'GERMAN';
//Arrays

$bestLanguague = ["PHP", "JAVA", "PY", "HTML"];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
:root{
    color-scheme: light dark;
   } 
body{
    display: grid;
    place-content: center;
    font-family: 'Lucida Sans Regular', sans-serif;
}

</style>

<body>

<img src="<?= Logo_URL ?>" alt="PHP Logo" width="200">

 <h3>El mejor lenguaje es: <?= $bestLanguague[0] ?></h3>

<ul>
    <?php foreach($bestLanguague as $languague) : ?>
        <li><? $languague ?></li>
    <?php endforeach; ?>    
</ul>

<h1>
    <?= "Buenas tardes, mi nombre es " . $name . " y tengo " . $age; ?>
    <br />
    <?= $intro; ?>
    <!-- IF statement -->
    <?php
    if ($itsOld) {
        echo "<h2>Eres un viejo, lo siento</h2>";
    } else {
        echo "<h2> Eres joven, que bien!</h2>";
    }
     ?>
    <!-- IF statement alternative way (excelente para bastanete contenido de HTML) -->
    <?php if ($itsOld) : ?>
        <h2>Eres un viejo, lo siento</h2>
        ...
        ...
    <?php else : ?>
        <h2> Eres joven, que bien!</h2>
    <?php endif; ?>

    <!--Ternaria -->

    <!--
    $istOld = $age > 40;
    $outputAge = $istOld 
    ? 'Eres un viejo, lo siento'
    : 'Eres joven, que bien!';
    
    -->

   

    <?php 
    $outputAge = match (true) {
       $age < 2 => "Eres un bebe, $name",
        $age < 10 => "Eres un nino, $name",
        default => "Eres un adulto, $name",
    }

    //Arrays

    
   
    ?>

<h2><?= $outputAge ?></h2>
</h1>




    
</body>
</html>