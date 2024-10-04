<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function soma($num,$num2){
        return $num + $num2;
    }

    function imprimir_resultado($num3){
        echo "O resultado é " . $num3;
    }
    
    $num5 = soma(5,6);
    imprimir_resultado($num5);
    ?>
</body>
</html>