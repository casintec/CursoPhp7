<?php
  // Video Aula 18
  //STRINGS 
  //Interpolação de Variáveis


  $nome = "Levy Franco";
  $nome2 = "Levy Santos";
  $nome3 = "Wanderson Levy";

  //Diferença entre string com aspas simples e strings com aspas duplas
  /*
    ASPAS SIMPLES - Para usar as aspas simples e chamar uma variável 
    é necessário concatenar com ponto de concatenação. 

    ASPAS DUPLAS - Pode se chamar a variável sem necessidade do ponto 
    de concatenação. 
  */
  echo '<p>Casintec com '.$nome.'</p>';
  echo '<p>Casintec com '.$nome2.'</p>';
  echo "<p>Casintec com $nome3</p>";

  //var_dump($nome, $nome2);

?>