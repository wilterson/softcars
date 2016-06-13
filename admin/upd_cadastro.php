<?php
/**
 * Created by PhpStorm.
 * User: Wilterson Garcia
 * Date: 12/06/2016
 * Time: 20:05
 */

session_start();

include('config/initialize.php');
include('config/Conn/Conn.class.php');

// Recebe e valida as variaveis
$nome = filter_var(mb_strtolower($_POST['nome'], 'UTF-8'), FILTER_SANITIZE_STRING);
$email = strip_tags(filter_var(strtolower( $_POST['email'] ), FILTER_SANITIZE_EMAIL));
$celular = strip_tags(filter_var(str_replace('-', '', $_POST['celular']), FILTER_SANITIZE_NUMBER_INT));
$dtNasc = strip_tags($_POST['dtNasc']);
$cep = str_replace('-', '', strip_tags($_POST['cep']));
$id = $_SESSION['user_id'];

$result = false;

// Monta array para cadastro de usuario (tabela usuarios)
$dados = array("nome" => $nome,
    "email" => $email,
    "celular" => $celular,
    "dataNascimento" => $dtNasc,
    "cep" => $cep,
);

//executa o create de usuario
$update = new Update();
$update->ExeUpdate('usuarios', $dados, 'WHERE id = :id', 'id='.$id);

//Update efetuado com sucesso
if($update->getResult()){
    $msge = "success";
    echo $msge;
}else{
    $msge = "error";
    echo $msge;
}