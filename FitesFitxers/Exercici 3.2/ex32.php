<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>

    <h1>Introdueix dades</h1>
    <form action="" method="post">
    <textarea id="comentari" name="comentari" rows="4" cols="50"></textarea><br><br>
    <label for="separador">Separador:</label><br><br>
    <input type="text" id="separador" name="separador"><br>
    <input type="submit"><br>
    </form>

    <?php
    if(isset($_POST["comentari"]) && isset($_POST["separador"])){
        $file = fopen("comentaris.txt","a");
        $comentari = str_replace(" ",$_POST["separador"],$_POST["comentari"]);
        fwrite($file,$comentari);
        fwrite($file,"\n");
        fclose($file);
    }
        
    ?>
    
</body>
</html>