<?php
/**
 * Created by PhpStorm.
 * User: wilte_wm6vw14
 * Date: 28/05/2016
 * Time: 00:28
 */

require "config/initialize.php";

//$email = 'wilterson@gmail.com';
//
//$read = new Read();
//$read->ExeRead('usuarios', 'WHERE email = :email', "email=$email");
//
//if( $read-> getRowCount() >= 1){
//    echo "<pre>";
//    print_r($read->getResult());
//    echo "</pre>";
//}

//$dados = array('nome' => 'José das Dores');
//
//$update = new Update();
//$update->ExeUpdate('usuarios', $dados, 'WHERE id = :id', 'id=2');
//
//$update->setPlaces('id=10');
//echo "<pre>";
//print_r($update);
//echo "<pre>";

session_start();
$atual = filter_input(INPUT_GET, 'atual', FILTER_VALIDATE_INT);

$Pager = new Pager('teste.php?atual=', 'Primeira', 'Última');
$Pager->ExePager($atual, 1);

$Read = new Read();
$Read->ExeRead('rotas_passageiro','WHERE id_passageiro=:id LIMIT :limit OFFSET :offset', "id=".$_SESSION['user_id']."&limit={$Pager->getLimit()}&offset={$Pager->getOffset()}");

if(!$Read->getRowCount()){
    $Pager->ReturnPage();
    echo "Não foram encontrados resultados";
}else{
    echo "<pre>";
    print_r($Read->getResult());
    echo "<pre>";
}


$Pager->ExePaginator('rotas_passageiro');
//var_dump($Pager);
echo $Pager->getPaginator();