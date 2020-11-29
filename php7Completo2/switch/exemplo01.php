<?php

  //Video Aula 21
  //Estruturas de Controle e Laços de Repetição
  //Switch Case

  $diaSemana = date('w');

  echo $diaSemana;

  switch ($diaSemana){
    case 0:
      echo "Domingo";
    break;

    case 1:
      echo "Segunda-Feira";
    break;

    case 2:
      echo "Terça-Feira";
    break;

    case 3:
      echo "Quarta-Feira";
    break;

    case 4:
      echo "Quinta-Feira";
    break;

    case 5:
      echo "Sexta-Feira";
    break;
    
    case 6:
      echo "Sábado";
    break;

    default:
      echo "Data Inválida";
    break;
    
  }

?>