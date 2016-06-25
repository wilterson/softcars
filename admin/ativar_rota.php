<?php
/**
 * Created by PhpStorm.
 * User: Wilterson Garcia
 * Date: 25/06/2016
 * Time: 00:37
 */

session_start();

// Recebe e valida as variaveis
$rotaId = $_POST['rotaId'];
$assentos = $_POST['assentosDisponiveis'];
$userId = $_SESSION['user_id'];

$result = false;

// Monta array para cadastro de usuario (tabela usuarios)
$dados = array("ativa" => 1,
    "assentos" => $assentos,
);

//executa o create de usuario
$update = new Update();
$update->ExeUpdate('rotas_passageiro', $dados, 'WHERE id = :id', 'id='.$rotaId);

//Update efetuado com sucesso
if($update->getRowCount() >= 1){
    $msge = "success";
    echo $msge;
}else{
    $msge = "error";
    echo $msge;
}