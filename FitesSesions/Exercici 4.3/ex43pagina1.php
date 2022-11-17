<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 1</title>
</head>
<body>

    <h1>Ejercicio 4</h1>

    <?php

    
    $letras = array("A","B","C","D");
    $letrasGet = "";
    for($i = 0; $i < count($letras); $i++){
        echo "<a href='ex43pagina1.php?letras=".$letras[$i]."'>".$letras[$i]."</a>";
        echo "<br>";
    }

    
    $_SESSION["letras"] .= $_GET["letras"];
    

    echo $_SESSION["letras"];
        

    ?>

    
</body>
</html>