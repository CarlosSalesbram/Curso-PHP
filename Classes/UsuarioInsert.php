<?php

try {
    $conn = new PDO("pgsql:host=localhost; port=5432; dbname=curso_php", "postgres", "acesse");
    // Configura o PDO para lançar exceções em caso de erro
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão com PostgreSQL feita com sucesso!";
} catch (PDOException $e) {
    echo "Erro ao conectar: " . $e->getMessage();
}

$sql  = "INSERT INTO tb_usuario (usu_nome, usu_idade, usu_sexo)";
$sql .= " VALUES (:usuarioNome, :usuarioIdade, :usuarioSexo)";


$stmt = $conn->prepare($sql);

$nome = "Carlos";
$idade = 18;
$sexo = "Masculino";

$stmt->bindParam(':usuarioNome',  $nome,  PDO::PARAM_STR);
$stmt->bindParam(':usuarioIdade', $idade, PDO::PARAM_INT);
$stmt->bindParam(':usuarioSexo',  $sexo,  PDO::PARAM_STR);

$stmt->execute();