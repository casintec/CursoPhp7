<?php

  //Seção 7 - Trabalhando com Funções em PHP 7
  //Video Aula 34 - Parâmetros por Valor x Parâmentros por Referência

  function soma(int ...$valores){

    return array_sum($valores);

  }

  echo '<p>' . soma(2, 2) . '</p>';
  echo '<p>' . soma(25, 33) . '</p>';
  echo '<p>' . soma(1.5, 3.5) . '</p>';

?>