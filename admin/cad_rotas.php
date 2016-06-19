<?php
/**
 * Created by PhpStorm.
 * User: wilte
 * Date: 11/06/2016
 * Time: 09:45
 */

include('config/initialize.php');
include('config/Conn/Conn.class.php');
session_start();

// Recebe e valida as variaveis
$nomeRota = filter_var(mb_strtolower( $_POST['nomeRota'] ), FILTER_SANITIZE_STRING);
$origemRota = filter_var(mb_strtolower( $_POST['origemRota'] ), FILTER_SANITIZE_STRING);
$destinoRota = filter_var(mb_strtolower( $_POST['destinoRota'] ), FILTER_SANITIZE_STRING);
$observacaoRota = filter_var(mb_strtolower( $_POST['observacaoRota'] ), FILTER_SANITIZE_STRING);

$result = false;

// Monta array para cadastro de rota (tabela rota)
$dados = array("id_passageiro" => $_SESSION['user_id'],
    "nome_rota" => $nomeRota,
    "origem" => $origemRota,
    "destino" => $destinoRota,
    "obsRota" => $observacaoRota,
    "favorita" => 0
);

//executa o create de rota
$rotaCad = new Create();
$rotaCad->ExeCreate('rotas_passageiro', $dados);

//Cadastro efetuado com sucesso
if($rotaCad->getStatus()){
    $msg = "success";
    echo $msg;
}else{
    $msg = "error";
    echo $msg;
}