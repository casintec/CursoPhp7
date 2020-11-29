<?php

  //Seção 7 - Trabalhando com Funções em PHP 7
  //Video Aula 35 - Funções Anônimas

  function test($callback){
    //Processo lento
    $callback();
  }

  test(function(){
    echo "Terminou!";
  });

?>