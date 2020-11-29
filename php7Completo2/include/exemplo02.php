<?php

  include "exemplo01.php";

  $resultado = somar(10, 20);

  echo $resultado;

  /*
  Qual a diferença entre include e require?
    R=  Com require é necessário que o arquivo exista e que o arquivo
        estejá funcionando corretamente. Senão o require gera um erro 
        fatal, parando a execução do código.

        O include tenta prosseguir a execução do código mesmo se não
        existir o arquivo ou se o arquivo estiver com erros.

        
  */
?>