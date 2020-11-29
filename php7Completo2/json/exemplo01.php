<?php

  //Video Aula 25
  //Arrays em PHP
  //Json
  /*Json Encode */

  $pessoas = array();

  array_push($pessoas, array(

    'nome' => Levy,
    'idade' => 31

  ));

  array_push($pessoas, array(

    'nome' => Wanderson,
    'idade' => 25

  ));


  echo json_encode($pessoas);

?>