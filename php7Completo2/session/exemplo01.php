<?php

  //Video Aula 28 - Criando e Entendendo Sessões em PHP
  //session_start | session_unset | session_destroy

  //Serve para iniciar uma sessão
  //session_start();

  /*Na maioria das vezes pode ser usado um arquivo de configuração para
  iniciar a sessao */

  require_once("config.php");

  //Função que serve para LIMPAR o usuário da sessão
  //session_unset('nome');

  $_SESSION["nome"] = "Casintec";

  //Variável que serve para LIMPAR a variável e remover o usuário da sessão
  //session_destroy();

?>