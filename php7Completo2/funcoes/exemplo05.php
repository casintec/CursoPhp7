<?php

  //Seção 7 - Trabalhando com Funções em PHP 7
  //Video Aula 32 - Parâmetros por Valor x Parâmentros por Referência

  $a = 10;

  function trocaValor($a){

    $a = 50;
    return $a;

  }

  //Chamando a variável fora da função
  echo '<p>' .$a. '</p>';

  //Chamando a variável da função
  echo '<p>'. trocaValor($a) .'</p>';

?>