<?php 

require_once("config.php");


// $sql = new Sql();

// $usuario = $sql-> select("SELECT *FROM tb_usuario");
// echo  json_encode($usuario);

# carrega um usuario
// $root = new Usuario();
// $root->loadById(3);
//echo $root;

#chamou o metdo especifico para getLIST//
// $lista = Usuario::getList();

// echo json_encode($lista);

// $search = Usuario::search("ma");
// echo json_encode($search);

#carregando um usuario com o login e senha
   // $usuario = new Usuario();

   // $usuario->login("maquina","10011000");

   // echo $usuario;
/*
Criando um insert
$aluno = new Usuario();
$aluno->setDeslogin("aluno");
$aluno->setDessenha("@lun0");
$aluno->insert();

echo $aluno;
*/
/*
ALTERANDO   O USUARIO
$usuario = new Usuario();
$usuario->loadById(15);
$usuario->update("professor","pr0fe$$0r");
echo $usuario;
*/

$usuario = new Usuario();
$usuario->loadById(15);
$usuario->delete();
echo $usuario;

echo"Ola mundo!"

 ?>
