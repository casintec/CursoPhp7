<?php

  //Seção 7 - Trabalhando com Funções em PHP 7
  //Video Aula 34 - Novidades no PHP 7

  function soma(int ...$valores):string{

    return array_sum($valores);

  }

  echo '<p>' . var_dump (soma(2, 2)) . '</p>';
  echo '<p>' . soma(25, 33) . '</p>';
  echo '<p>' . soma(1.5, 3.5) . '</p>';

?>