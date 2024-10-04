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
    $carros2 = array(
        "Volskwagen" => ["Fusca ", "Gol", "Polo"], 
        "Chevrolet" => ["Prisma", "Carro1", "Carro2"],
        "Hyundai" => ["Carro3", "Carro4", "Carro5"]
    );
    foreach($carros2 as $marca => $modelos) {
        echo "<p>Marca: $marca</p>";
        foreach($modelos as $modelo){
            echo "<p>Modelo: $modelo</p>";
        }
    }
    print_r($carros2);
    ?>
</body>
</html>