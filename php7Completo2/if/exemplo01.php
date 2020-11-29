<?php

  //Video Aula 20
  //IF

  $qualasuaidade = 125;
  $idadeCrianca = 12;
  $idadeMaior = 18;
  $idadeMelhor = 65;
  
  echo "<p>";
  
  if ($qualasuaidade < $idadeCrianca){
      echo "Criança.";
  }
  else if($qualasuaidade < $idadeMaior){
    echo "Adolescente";
  }
  else if($qualasuaidade < $idadeMelhor){
    echo "Adulto";
  }
  else{
    echo "Idoso.";
  }

  echo "</p>";

  echo ('<p>'. $qualasuaidade < $idadeMaior)?"Menor de idade":"Maior de Idade </p>";

?>