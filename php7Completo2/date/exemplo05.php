<?php

  //Seção 8 - Trabalhando com Data e Hora no PHP 7
  //Video Aula 38
  //Classe dateTime

  $dt = new DateTime();

  $periodo = new DateInterval("P15D");

  echo '<p>' . $dt->format("d/m/Y H:i:s") . '</p>';

  $dt->add($periodo);

  echo '<p>' . $dt->format("d/m/Y H:i:s") . '</p>';

?>