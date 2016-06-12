<?php
/**
 * Created by PhpStorm.
 * User: wilte
 * Date: 11/06/2016
 * Time: 09:45
 */

include('config/initialize.php');
include('config/Conn/Conn.class.php');

// Recebe e valida as variaveis
$nomeRota = filter_var(strtolower( $_POST['nomeRota'] ), FILTER_SANITIZE_STRING);
$origemRota = filter_var(strtolower( $_POST['origemRota'] ), FILTER_SANITIZE_STRING);
$destinoRota = filter_var(strtolower( $_POST['destinoRota'] ), FILTER_SANITIZE_STRING);
$observacaoRota = filter_var(strtolower( $_POST['observacaoRota'] ), FILTER_SANITIZE_STRING);

$result = false;

// Monta array para cadastro de rota (tabela rota)
$dados = array("nome" => $nome,
    "email" => $email,
    "celular" => $celular,
    "dataNascimento" => $dtNasc,
    "cep" => $cep,
    "ativo" => 1,
    "tipo_user" => 1        // 1 - Passageiro | 2 - Motorista
);

$verifEmail = new Read();
$verifEmail->ExeRead('usuarios', 'WHERE email=:email', "email=$email");

// Verifica se já existe usuario com esse email
if( $verifEmail->getRowCount() >= 1){

    $msge = "erro email";
    echo $msge;
}else{
    //executa o create de usuario
    $cadastro = new Create();
    $cadastro->ExeCreate('usuarios', $dados);

    //Cadastro efetuado com sucesso, prepara o cadastro do login
    if($cadastro->getStatus()){
        //Monta array para cadastro do login do usuario (tabela login)
        $id_usuario = $cadastro->getResult();

        $dadosLogin = array("id_passageiro" => $id_usuario,
            "login" => $email,
            "password" => $senha
        );

        $cadastroLogin = new Create();
        $cadastroLogin->ExeCreate('login', $dadosLogin);

        if($cadastro->getStatus()){
            $msge = "success";
            echo $msge;
        }
    }else{
        $msge = "error";
        echo $msge;
    }
}