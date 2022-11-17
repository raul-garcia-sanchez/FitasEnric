<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 3</title>
</head>
<body>

    <h1>ENDEVINA EL NOMBRE</h1>

    <?php
    echo "<script>alert(".$_SESSION["ocult"].")</script>";
        if(!isset($_POST["endevina"])){
            ?>
                <form action="" method="post">
                    <input name="endevina" type="number">
                    <input type="submit">
                </form>
            <?php
        }
        else{
            if($_SESSION["ocult"] > $_POST["endevina"]){
                echo "El nombre ocult es major";
                ?>
                <form action="" method="post">
                    <input name="endevina" type="number">
                    <input type="submit">
                </form>
            <?php
            }
            else if ($_SESSION["ocult"] < $_POST["endevina"]){
                echo "El nombre ocult es menor";
                ?>
                <form action="" method="post">
                    <input name="endevina" type="number">
                    <input type="submit">
                </form>
            <?php
            }
            else{
                echo "Felicitats has acertat el nombre ocult!";
                echo "<br>";
                echo "<a href='ex41pagina1.php'>Tornar a l'inici</a>";
            }
        }
    ?>

    
    
</body>
</html>