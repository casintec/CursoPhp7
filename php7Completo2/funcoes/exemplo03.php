<?php

  //Seção 7 - Trabalhando com Funções em PHP 7
  //Video Aula 32 - Parâmetros de Funções
  //Função de subrotina ou função propriamente dita

  //Pode ser colocado mais parâmetros...
  function ola($texto, $periodo = "Bom dia"){

    return '<p>Olá, ' . $texto . ', ' .$periodo. '!</p>';

  }

  echo ola("Mundo");
  echo ola("", "Boa noite");
  echo ola("Glaucio", "Bom tarde");
  echo ola("Joao", "");

?>