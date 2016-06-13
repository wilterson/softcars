<?php
/**
 * Created by PhpStorm.
 * User: Wilterson Garcia
 * Date: 26/05/2016
 * Time: 15:05
 */

require_once('initialize.php');
require_once('Conn/User.class.php');

$db = new Conn();
$db->getConn();
$login = new USER($db);

$loginEmail = strip_tags($_POST['login-email']);
$loginPass = md5(strip_tags($_POST['login-senha']));

if($login->doLogin($loginEmail,$loginPass)){
    $msg = "success";
    echo $msg;
}else{
    $msg = "error";
    echo $msg;
}