<?php

  //Video Aula 23
  //Estruturas de Controle e Laços de Repetição
  //Foreach

  $meses = array(
    "Janeiro", "Fevereiro","Março",
    "Abril", "Maio", "Junho",
    "Julho", "Agosto", "Setembro",
    "Outubro", "Novembro", "Dezembro"
  );

  foreach ($meses as $mes) {
    
    echo "<p>O mês é: $mes</p>";
    
  }

  echo"<br><br>";

  foreach ($meses as $index => $mes) {
    
    echo "Indice é: $index</p>";
    echo "<p>O mês é : $mes</p><br>";
    
  }

?>