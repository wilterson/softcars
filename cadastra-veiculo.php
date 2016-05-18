<?php
/**
 * Created by PhpStorm.
 * User: Parker
 * Date: 12-05-2016
 * Time: 21:34
 */

// Recebe todas as variaveis do formulario (inputs)

$nomeUsuario = $_POST['user_name'];
$userMail = $_POST['user_email'];
$userPassword = $_POST['user_password'];
$userIdade = $_POST['user_age'];
$marca = $_POST['marca'];
$userModelo = $_POST['user_modelo'];
$userCor = $_POST['user_cor'];
$userPlaca = $_POST['user_placa'];



// Conexao com BD


//Inserir motoristas no BD
//Pesquisar: Como fazer cadastro com php e mysql.



echo $marca;