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

    <h1>Notes de text</h1>
    <form action="" method="post">
        <textarea id="text" name="text" rows="4" cols="50"></textarea><br>
        <input type="submit">
    </form>

    <?php
        if(isset($_POST["text"])){
            $_SESSION["text"] .= $_POST["text"]."<br><br>";
            
        }
        echo $_SESSION["text"];
        
    ?>


    
</body>
</html>