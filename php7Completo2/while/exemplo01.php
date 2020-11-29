<?php
//Video Aula 24
  //Estruturas de Controle e Laços de Repetição
  //While

$condicao = true;

while($condicao){

  $numero = rand(1, 10);

  if ($numero === 3){

    echo "TRÊS!!!";
    $condicao = false;

  }

  echo " " .$numero . " ";

}

?>