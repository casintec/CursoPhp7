<?php

  //Seção - Programação Orientada a Objetos - Introdução
  //Video Aula 41 - Criando uma classe

  class Pessoa{

    //Atributo
    public $nome;

    public function falar(){
      return "O meu nome é: ".$this->nome;
    }

  }

  $glaucio = new Pessoa();
  $glaucio->nome = "Glaucio Daniel";
  echo $glaucio->falar();

?>