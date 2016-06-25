<?php
/**
 * Created by PhpStorm.
 * User: Wilterson Garcia
 * Date: 20/06/2016
 * Time: 00:49
 */

include('config/initialize.php');
include('config/Conn/Conn.class.php');
session_start();

// Recebe e valida as variaveis
$marca = filter_var(mb_strtolower( $_POST['marcaCar'] ), FILTER_SANITIZE_STRING);
$modelo = filter_var(mb_strtolower( $_POST['modelo'] ), FILTER_SANITIZE_STRING);
$placa = filter_var(mb_strtolower( $_POST['placa'] ), FILTER_SANITIZE_STRING);
$ano = filter_var(mb_strtolower( $_POST['ano'] ), FILTER_SANITIZE_NUMBER_INT);
$cor = filter_var(mb_strtolower( $_POST['cor'] ), FILTER_SANITIZE_STRING);

$result = false;

// Monta array para cadastro de rota (tabela rota)
$dados = array("id_usuario" => $_SESSION['user_id'],
    "marca" => $marca,
    "modelo" => $modelo,
    "placa" => $placa,
    "ano" => $ano,
    "cor" => $cor
);

//executa o create de carros
$carro = new Create();
$carro->ExeCreate('carros', $dados);

//Cadastro efetuado com sucesso
if($carro->getStatus()){
    $msg = "success";
    echo $msg;
}else{
    $msg = "error";
    echo $msg;
}