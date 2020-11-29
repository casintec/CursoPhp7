<?php

//Video Aula 15
//Variáveis Pré Definidas

$nome = $_GET["a"];

//var_dump($nome);

$ip = $_SERVER["REMOTE_ADDR"];

$sc = $_SERVER["SCRIPT_NAME"];

echo $ip . "<br/><br/>" . $sc;

?>