<?php

  //Video Aula 25
  //Arrays em PHP
  //Array
  /*Array Bidimensional */

  $json = '[{"nome": "Levy","idade": 31},{"nome": "Wanderson","idade": 25}]';

  $data = json_decode($json, true);

  var_dump($data);

?>