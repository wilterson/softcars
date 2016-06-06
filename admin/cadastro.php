<?php

include('config/initialize.php');
include('config/Conn/Conn.class.php');

$db = new Conn();


//Verifica tipo de usuário
isset($_POST['tipo']) == 'on' ? $tipo = 'motorista' : $tipo = 'passageiro';


echo "<pre>";
print_r($_POST);
echo "<pre>";
print_r($tipo);