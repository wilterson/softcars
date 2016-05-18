<?php
/**
 * Created by PhpStorm.
 * User: Parker
 * Date: 12-05-2016
 * Time: 21:34
 */

// Recebe todas as variaveis do formulario (inputs)

$nomeUsuario = $_POST['driver_name'];
$userMail = $_POST['driver_email'];
$userPassword = $_POST['driver_password'];
$userIdade = $_POST['driver_age'];
$marca = $_POST['car_marca'];
$userModelo = $_POST['car_modelo'];
$userCor = $_POST['car_cor'];
$userPlaca = $_POST['car_placa'];



// Conexao com BD


//Inserir motoristas no BD
//Pesquisar: Como fazer cadastro com php e mysql.



echo $marca;