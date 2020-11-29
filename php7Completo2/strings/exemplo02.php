<?php
  // Video Aula 18
  //STRINGS
  //Funções para Strings

  $nome = "wanderson levy franco dos santos";
  $nome2 = "samayra patrícia franco dos santos";

  //função strtoupper - para deixar todas as letras maiúsculas
  echo strtoupper("<p>$nome</p>");

  //função strtolower - para deixar todas as letras maiúsculas
  echo strtolower("<p>$nome</p>");

  /*função ucwords - para aplicar maiúsculas somente na primeira letra
  de cada palavra
  */
  echo '<p>'.ucwords($nome).'</p>';

  /*função ucfirst - para aplicar maiúsculas somente na primeira letra
  de um texto.
  */
  echo '<p>'.ucfirst($nome).'</p>';

?>