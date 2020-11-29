<?php

  //Video Aula 17
  //Conhecendo os Operadores do PHP7
  //Precedencia dos Operadores

  $resultado1 = 10 + 4 / 2;

  $resultado2 = (10 + 4) / 2;

  echo "10 + 4 / 2 = " . $resultado1;

  echo "<br /><br />";

  echo "(10 + 4) / 2 = " . $resultado2;

  echo "<br /> ###################";
  echo "<br /><br />";

  //Operadores Lógicos

  $resultado3 = 10 + 4 / 2 > 6 && 15 > 6;
  var_dump($resultado3);
  echo "<br /><br />";

  $resultado4 = 10 + 4 / 2 < 6 && 15 > 6;
  var_dump($resultado4);
  echo "<br /><br />";

  $resultado4 = 10 + 4 / 2 < 6 || 15 > 6;
  var_dump($resultado4);
  echo "<br /><br />";

?>