<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    //PRIMEIRO DEFINIR OS DADOS PARA CONEXÃO:
    $host = "localhost";
    $port = 5432;
    $user = "postgres";
    $pass = "jp102030";
    $name = "LOJA";
    $dsn = "pgsql:host=$host;port=$port;dbname=$name";//string de conexão

    try{
        $pdo = new PDO($dsn,$user,$pass);//CONECTANDO AO BANCO DE DADOS USANDO O PDO
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//EXIBIR ERROS
        //CONSULTANDO A TABELA CLIENTES
        $consulta_sql = "SELECT * FROM CLIENTES";
        $stmt = $pdo->query($consulta_sql);
         // Exibindo os resultados da consulta
        echo "<table border='1'>";
        echo "<tr><th>ID</th><th>Nome</th><th>Email</th></tr>";


        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['id']) . "</td>";
            echo "<td>" . htmlspecialchars($row['nome']) . "</td>";
            echo "<td>" . htmlspecialchars($row['email']) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }catch(PDOException $e){
        echo "Erro de conexão: " . $e->getMessage();
    } finally{
        if($pdo){
            $pdo = null;
        }
    }
    ?>
</body>
</html>