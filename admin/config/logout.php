<?php

/**
 * @author: Wilterson Garcia
 * Date: 12/06/2016 00:22
 **/

    require_once('initialize.php');
	require_once('session.php');
	require_once('Class/User.clas.php');

    $db = new Conn();
	$user_logout = new USER($db);

	if($user_logout->is_loggedin()!="")
	{
		$user_logout->redirect('home.php');
	}
	if(isset($_GET['logout']) && $_GET['logout']=="true")
	{
		$user_logout->doLogout();
		$user_logout->redirect('index.php');
	}
