<?php

  //Seção 7 - Trabalhando com Funções em PHP 7
  //Video Aula 32 - Parâmetros de Funções

  function ola(){

    $argumentos = func_get_args();

    return $argumentos;

  }

  var_dump(ola("Bom dia!", 10));

?>