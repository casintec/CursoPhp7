<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "root");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

$login = "Josinha";
$passaword = "678123$#@";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $passaword);

$stmt->execute();


echo "Inserido OK";
