<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label for = "num1">Insira um numero: </label>
    <input type = "number" name = "num1" id = "num1" required>
    <label for = "num2">Insira outro número: </label>
    <input type = "number" name = "num2" id = "num2" required>
    <select name = "oper" id = "oper" required>
    <option value = "soma">Soma</option>
    <option value = "sub">Subtração</option>
    <option value = "div">Divisão</option>
    <option value = "mult">Multiplicação</option>
    </select>
    <button type = "submit">Clique aqui</button>      
    

</form>   
    <?php
    if(isset ($_POST['num1']) && isset ($_POST['num2']) && isset ($_POST['oper'])){

    $valor1=$_POST['num1'];
    $valor2=$_POST['num2'];
    $operador = $_POST['oper'];
    $resultado = "";
    switch($operador){
        case "soma":
            $resultado =$valor1 + $valor2;
            
            break;
        case "sub":
            $resultado = $valor1 - $valor2;
           
            break;
        case "div":
            if($valor2 != 0){
                $resultado = $valor1 / $valor2;
                
            }
            else{
                $resultado = "Divisão por zero. Inválido";
            }
            break;
        case "mult":
            $resultado = $valor1 * $valor2;
            break;           
    }
    echo "<p>Resultado: $resultado</p>";
}
   