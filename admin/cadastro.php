<?php

include('config/initialize.php');
include('config/Conn/Conn.class.php');

// Recebe e valida as variaveis
$nome = filter_var($_POST['registrar-nome'], FILTER_SANITIZE_STRING);
$email = filter_var($_POST['registrar-email'], FILTER_SANITIZE_EMAIL);
$celular = filter_var(str_replace('-', '', $_POST['registrar-celular']), FILTER_SANITIZE_NUMBER_INT);
$idade = $_POST['registrar-idade'];
$cep = str_replace('-', '', $_POST['registrar-cep']);
$senha = MD5($_POST['registrar-senha']);

$dados = array("nome" => $nome,
    "email" => $email,
    "celular" => $celular,
    "idade" => $idade,
    "cep" => $cep,
    "ativo" => 1,
    "tipo_user" => 1
);

$cadastro = new Create();
$cadastro->ExeCreate('usuarios', $dados);

$id = $cadastro->getResult();

$login = new Create();
$dados_login = array();

echo "<pre>";
print_r($dados);
echo "<pre>";

echo $id;