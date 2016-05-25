<?php
$host = "locallhost";
$user = "root";
$pass = "";
$banco = "test";
$link = mysql_connect($host, $user, $pass) or die (mysql_error());
$db = mysql_select_db($banco, $link) or die (mysql_error());

if(!$link)
{
    echo "erro ao conectar ao banco de dados!";exit();
}

?>

<?php
$nomeUsuario = $_POST['user_name'];
$userMail = $_POST['user_email'];
$userPassword = $_POST['user_password'];
$userIdade = $_POST['user_age'];
$userCep = $_POST ['user_cep'];
$userEstado = $_POST['user_estado'];
$userCidade = $_POST['user_cidade'];
$userRua = $_POST['user_rua'];
$userNumero = $_POST['user_numero'];
$userComplemento = $_POST['user_complemento'];

$sql= mysql_query("INSERT INTO exemplo1 (user_name, user_email, user_password, user_age, user_cep, user_estado, user_cidade, user_rua, user_numero, user_complemento) 
VALUES ('user_name' , 'user_email' , 'user_password' , 'user_age' , 'user_cep' , 'user_estado' , 'user_cidade' , 'user_rua' , 'user_numero' , 'user_complemento')");

mysql_close($link);

?>



