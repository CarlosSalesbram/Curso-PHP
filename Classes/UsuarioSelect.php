<?php

try {
    $conn = new PDO("pgsql:host=localhost; port=5432; dbname=curso_php", "postgres", "acesse");
    // Configura o PDO para lançar exceções em caso de erro
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão com PostgreSQL feita com sucesso!";
} catch (PDOException $e) {
    echo "Erro ao conectar: " . $e->getMessage();
}
$usuarios = [];

$sql = "SELECT * FROM tb_usuario";

$result = $conn->query($sql);
echo "</br>";
while ($usuario = $result->fetch(PDO::FETCH_NUM)) {
    foreach ($usuario as $valor) {
        echo $valor . "<br>";
    }
    echo "<hr>";
}

