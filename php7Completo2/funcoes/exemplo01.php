<?php

  //Seção 7 - Trabalhando com Funções em PHP 7
  //Video Aula 31 - Criando funções de usuário
  //Função de subrotina ou função propriamente dita

  function usuario(){

    echo "<p>Olá, Mundo!</p>";

  }

  usuario();

  function usuario2(){

    return "<p>Olá, Mundo!</p>";

  }

  usuario2();

  $frase = usuario2();

  echo strlen($frase);

?>