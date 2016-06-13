<?php
echo " <meta charset=\"utf-8\">";
include('config/initialize.php');
include('config/Conn/Conn.class.php');

// Recebe e valida as variaveis
$nome = filter_var(mb_strtolower($_POST['registrar-nome'], 'UTF-8'), FILTER_SANITIZE_STRING);
$email = strip_tags(filter_var(strtolower( $_POST['registrar-email'] ), FILTER_SANITIZE_EMAIL));
$celular = strip_tags(filter_var(str_replace('-', '', $_POST['registrar-celular']), FILTER_SANITIZE_NUMBER_INT));
$dtNasc = strip_tags($_POST['registrar-dtNasc']);
$cep = str_replace('-', '', strip_tags($_POST['registrar-cep']));
$senha = md5(strip_tags($_POST['registrar-senha']));

$result = false;

// Monta array para cadastro de usuario (tabela usuarios)
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
        die;
    }
}