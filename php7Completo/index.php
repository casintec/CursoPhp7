<?php

require_once("config.php");

//$sql = new Sql();

//$usuarios = $sql->select("SELECT * FROM tb_usuarios");

//echo json_encode($usuarios);

//Carrega um usuário por vez
//$root = new Usuario();
//$root->loadById(8);
//echo $root;


//Carrega todos os usuários
/*$lista = Usuario::getList();
echo json_encode($lista);
*/

//Carrega uma lista d eusuário buscando pelo login
/*$busca = Usuario::search("jo");

echo json_encode($busca);
*/

//Carrega um usuário com login e senha (logado)
/*$usuariologado = new Usuario();
$usuariologado->login("lev_wand", "root");
echo $usuariologado;
*/

$aluno = new Usuario("aluno", "@@@lun0");

//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("@alun0");

$aluno->insert();

echo $aluno;

?>