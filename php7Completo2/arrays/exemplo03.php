<?php

  //Video Aula 25
  //Arrays em PHP
  //Array
  /*Array Bidimensional */

  $pessoas = array();

  array_push($pessoas, array(

    'nome' => Levy,
    'idade' => 31

  ));

  array_push($pessoas, array(

    'nome' => Wanderson,
    'idade' => 25

  ));


  '<p>'.print_r($pessoas).'</p>';
  
  //Assim como no exemplo2 pode puxar só os dados de uma das pessoas...
  '<p>'.print_r($pessoas[0]).'</p>';

  //Pode pegar também um dado específico da pessoa.
  '<p>'.print_r($pessoas[1]['nome']).'</p>';

?>