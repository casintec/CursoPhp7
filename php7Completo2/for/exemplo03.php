<?php

  //Video Aula 22
  //Estruturas de Controle e Laços de Repetição

  //Extra Repetir os anos de uma data até outra data antiga
  /*
  for ($i=date('Y'); $i >= date('Y') - 100; $i-- ){

    echo '<p>'.$i.'</p>';

  }
  */

  echo "<select>";

  for ($i=date('Y'); $i >= date('Y') - 100; $i-- ){

    echo '<option value="'. $i.'">'.$i.'</option>';

  }
  echo "</select>";

?>