<?php

  //Video Aula 22
  //Estruturas de Controle e Laços de Repetição
  //For
  
  for($i=0; $i<1000; $i+=5){

    if ($i >200 && $i<800) continue;

    if ($i === 900) break;

    echo "<p>$i</p>";
  }

?>