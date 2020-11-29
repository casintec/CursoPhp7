<?php

//Video Aula 14  
//Conhecendo os Tipos de Dados em PHP

// TIPOS DE DADOS BÁSICOS:

//STRING

$nome = "Wanderson Levy Franco dos Santos";
$site = 'https://www.casintec.com.br'; //Uso de Aspas simples
//INTEIRO
$ano = 1988;
//PONTO FLUTUANTE
$salario = 5500.99;
//BOOLEANO
$bloqueado = false;


/////////////////////////////////////////////////

//TIPOS COMPOSTOS

//Tipo Array
$frutas = array("abacaxi", "laranja", "maçã", "banana", "mamão", "uva", "morango");

//echo $frutas[6];

//Tipo Orientação a Objeto
$nascimento = new DateTime();

//var_dump($nascimento);

///////////////////////////////////////

//TIPOS ESPECIAIS
//RESOURCE

$arquivo = fopen("exemplo03.php", "r");

//var_dump($arquivo);

//NULL e VAZIO

$nulo = NULL; //Não existe mais a variável na memória;

$vazio = ""; //Existe o espaço na memória, mas não há um dado atribuido a variável.

/*
  No PHP existem 8 tipos de dados primitivos divididos em 3 grupos:
  - TIPOS BÁSICOS
    - Inteiro (numérico);
    - Ponto Flutuante (Decimal);
    - Booleano (Verdadeiro/Falso);
    - String.
  - TIPOS COMPOSTOS
    - Array;
    - Objeto.
  - TIPOS ESPECIAIS
   - Resource;
   - Null.
*/
?>