
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 2</title>
</head>
<body>

    <h1>ENREGISTRA FRASE 2</h1>

    <?php 

        $_SESSION["frase1"] = $_POST["frase1"];

    ?>

    <form action="ex42pagina3.php" method="post">
        <input type="text" name="frase2">
        <input type="submit">
    </form>
    
</body>
</html>