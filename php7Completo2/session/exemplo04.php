<?php

  //Aula 29 - Id de Sessão


  //Para recuperar um id de sessão
  session_id('l8qh1q5rvj0rhtimgm4k199j91');

  require_once("config.php");

  session_regenerate_id();

  echo session_id();

  var_dump($_SESSION);

?>