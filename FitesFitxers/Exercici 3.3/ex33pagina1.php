<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>

    <h1>Introdueix dades</h1>
    <form action="" method="post">
    <textarea id="comentari" name="comentari" rows="4" cols="50"></textarea><br><br>
    <input type="submit"><br>
    </form>
    
    <?php
    if(isset($_POST["comentari"])){
        $file = fopen("ex33.txt","a");
        fwrite($file,"_");
        fwrite($file,$_POST["comentari"]);
    }
    $textoFichero = file("ex33.txt");
    foreach($textoFichero as $texto){
        $textos = explode("_",$texto);
        foreach($textos as $textito){
            echo "<p>$textito</p>";
        }
       
    }
    ?>

</body>
</html>