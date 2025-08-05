<?php
require_once("config.php");

$sql = new Sql();

$query = "SELECT *";
$query .= " FROM tb_usuario "; 

$usuarios = $sql->select($query);

echo json_encode($usuarios);
