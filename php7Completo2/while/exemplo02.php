<?php

  //Video Aula 24
  //Estruturas de Controle e Laços de Repetição
  //Do while

  $total = 200;
  $desconto = .5;

  do {

    $total *= $desconto;

  }while($total > 100);

  echo $total;

?>