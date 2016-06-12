<?php
/**
 * Created by PhpStorm.
 * User: Wilterson Garcia
 * Date: 26/05/2016
 * Time: 15:05
 */

$loginEmail = strip_tags($_POST['txt_uname_email']);
$loginPass = strip_tags($_POST['txt_password']);

if($login->doLogin($uname,$umail,$upass))
{
    $login->redirect('home.php');
}
else
{
    $error = "Wrong Details !";
}