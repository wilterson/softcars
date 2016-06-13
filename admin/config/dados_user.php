<?php
/**
 * Created by PhpStorm.
 * User: Wilterson
 * Date: 12/06/2016
 * Time: 05:37
 */

$auth_user = new USER();
$getUser = new Read();
$getLoginUser =new Read();

$user_id = $_SESSION['user_id'];

$getUser->ExeRead('usuarios',"WHERE id=:id", "id=".$user_id);
$user = $getUser->getResult();

$getLoginUser->ExeRead('login',"WHERE id_passageiro=:id", "id=".$user_id);
$loginUser = $getLoginUser->getResult();