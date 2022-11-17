<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>COINCIDENCIES</h1>
    <a href="ex42pagina1.php">Anar a pagina principal</a><br>

    <?php

        $frase1 = explode(" ",$_SESSION["frase1"]);
        $frase2 = explode(" ",$_POST["frase2"]);
        $coincide = false;

        foreach($frase1 as $palabras1){
            foreach($frase2 as $palabras2){
                if($palabras1 === $palabras2){
                    echo "La paraula $palabras1 està a les dues frases";
                    echo "<br>";
                    $coincide = true;
                }
            }
        }

        if($coincide == false){
            echo "No hi ha cap coincidència";
        }

    ?>


</body>
</html>