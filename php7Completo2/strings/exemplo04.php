<?php

  // Video Aula 18
  //STRINGS
  //FUNÇÕES PARA STRINGS

  $frase = "A repetição é mãe da retenção.";

  $palavra = "mãe";
  
  /*Função strpos para encontrar a posição da primeira 
  ocorrência de uma string*/
  $q = strpos($frase, $palavra);

  var_dump($q);

  //Função substr para retornar uma parte de uma string
  $texto = substr($frase, 0, $q);  

  var_dump($texto);

  //Função strlen para retornar o tamanho de uma string
  $texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

  var_dump($texto2);

?>