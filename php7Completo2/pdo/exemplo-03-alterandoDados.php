<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "root");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "rick";
$passaword = "1234567890";
$id = "3";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $passaword);
$stmt->bindParam(":ID", $id);

$stmt->execute();


echo "Dados Alterados com Sucesso";
