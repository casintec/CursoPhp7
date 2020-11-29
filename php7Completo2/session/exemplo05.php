<?php

  //Sessão no PHP 7
  //Video Aula 30
  //Funções para Sessão

  require_once("config.php");

  echo '<p>' . session_save_path() . '</p>';

  var_dump(session_status());

  switch (session_status()){
    
    case PHP_SESSION_DISABLED:
      echo '<p>As sessoes estão desabilitadas.</p>';
    break;

    case PHP_SESSION_NONE:
      echo '<p>As sessões estão habilitadas, mas nenhuma existe.</p>';
    break;

    case PHP_SESSION_ACTIVE:
      echo '<p>As sessões estão habilitadas e uma existe.</p>';
    break;

  }

?>