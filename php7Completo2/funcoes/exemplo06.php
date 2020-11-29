<?php

  //Seção 7 - Trabalhando com Funções em PHP 7
  //Video Aula 33 - Parâmetros por Valor x Parâmentros por Referência

  $pessoa = array(
    'nome'=>'João',
    'idade'=>20
  );

  foreach ($pessoa as &$value) {
    
    if (gettype($value) === 'integer') $value += 10;

    echo '<p>' .$value. '</p>'; 
    
  }

  print_r($pessoa);

?>