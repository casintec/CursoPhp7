<?php

  //simulação de erro de duplicidade de função
  require_once "exemplo03.php";
  require_once "exemplo03.php";

  $resultado = somar2(100, 350);

  echo $resultado;

  /*
  Qual a diferença entre include e require?
    R=  Com require é necessário que o arquivo exista e que o arquivo
        estejá funcionando corretamente. Senão o require gera um erro 
        fatal, parando a execução do código.

        O include tenta prosseguir a execução do código mesmo se não
        existir o arquivo ou se o arquivo estiver com erros.
    
    OBS: No PHP 7 o require e o require_once não geram mais 
    erros fatais, eles geram uma exceção, e pode ser tratado com try
    Catch (assunto para outra aula!). 
        
  */

?>