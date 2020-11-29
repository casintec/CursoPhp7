<?php

  //Video Aula 17
  //Conhecendo os Operadores do PHP
  //Operador Spaceship

  $a = 10;

  $b = 20;

  $c = 30;

  $d = 10;

  //Se a for maior que b aplica 1
  var_dump($a <=> $b);
  echo"<br /><br />";
  //Se a for menor b aplica -1
  var_dump($b <=> $a);
  echo"<br /><br />";
  //Se forem iguais aplica 0
  var_dump($a <=> $d);
  echo"<br /><br />";

?>