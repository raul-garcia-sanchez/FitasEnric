<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>

    <?php

        $file = file("ex34.txt");
        foreach($file as $pepe){
            $elements = explode(",",$pepe);
            foreach($elements as $element){
                if(str_contains($element,"##")){
                    $elementNew = str_replace("#","",$element);
                    echo "<h1>$elementNew</h1>";
                }
                else if(str_contains($element,"#")){
                    $elementNew = str_replace("#","",$element);
                    echo "<h2>$elementNew</h2>";
                }
                else{
                    echo $element;
                }
            }
        }


    ?>
    
</body>
</html>