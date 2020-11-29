<?php
 
  $name = 'Hcode Treinamentos';
  
  $replace = 'Cursos';

  /*Trocar a informação "Treinamentos para Cursos qu está 
  na variável $replace*/
  
  $new_name = substr($name, 0, strpos($name, 'T')) . $replace;

  echo $new_name;

  /*Interpretação:
    $new_name pega só o HCODE com substr() retirando com strpos() tudo 
    o que está a partir da referência T e concatena com a variável
    $replace que contem o valor Cursos.
  */

?>