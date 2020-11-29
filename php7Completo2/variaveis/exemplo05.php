<?php

  $nome = "Wanderson Levy";
  $sobrenome = "Franco dos Santos";

  function teste(){

    global $nome;
    echo $nome;

  }

  function teste2(){

    global $sobrenome;
    echo " " . $sobrenome;

  }

  teste();
  teste2();

?>