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

$dados = array('nome' => 'José das Dores');

$update = new Update();
$update->ExeUpdate('usuarios', $dados, 'WHERE id = :id', 'id=2');

$update->setPlaces('id=10');
echo "<pre>";
print_r($update);
echo "<pre>";