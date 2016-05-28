<?php
/**
 * Created by PhpStorm.
 * User: Wilterson Garcia
 * Date: 26/05/2016
 * Time: 19:32
 */

// BANCO DE DADOS

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'softcars');

function __autoload( $Class ){

    $cDir = ['Conn'];
    $iDir = null;

    foreach ($cDir as $dirName) {
        if(!$iDir && file_exists( __DIR__ . "\\{$dirName}\\{$Class}.class.php" ) && !is_dir( __DIR__ . "\\{$dirName}\\{$Class}.class.php" )){
            include_once (__DIR__ . "\\{$dirName}\\{$Class}.class.php");
            $iDir = true;
        }
    }

    if(!$iDir){
        trigger_error("Não foi possível incluir o arquivo {$Class}.class.php", E_USER_ERROR);
        die;
    }
}



$base_dir  = __DIR__; // Absolute path to your installation, ex: /var/www/mywebsite
$doc_root  = preg_replace("!${_SERVER['SCRIPT_NAME']}$!", '', $_SERVER['SCRIPT_FILENAME']); # ex: /var/www
$base_url  = preg_replace("!^${doc_root}!", '', $base_dir); # ex: '' or '/mywebsite'
$protocol  = empty($_SERVER['HTTPS']) ? 'http' : 'https';
$port      = $_SERVER['SERVER_PORT'];
$disp_port = ($protocol == 'http' && $port == 80 || $protocol == 'https' && $port == 443) ? '' : ":$port";
$domain    = $_SERVER['SERVER_NAME'];


define('URL', "${protocol}://${domain}${disp_port}");
define('ROOT', URL . '/softcars');
define('ADMIN', ROOT . '/admin');
define('CONFIG', ADMIN . '/config');
define('DIST', ADMIN . '/dist');
define('FOTOS', ADMIN . '/fotos');
define('INCLUDES', ADMIN . '/includes');
define('PAGES', ADMIN . '/pages');
define('ASSETS', ROOT . '/assets');



// PERSONALIZAÇÃO DE ERROS

//CSS constantes :: Mensagens de Erro
define('WS_ACCEPT', 'accept');
define('WS_INFOR', 'infor');
define('WS_ALERT', 'alert');
define('WS_ERROR', 'error');

//WSErro :: Exibe erros lançados :: Front
function WSErro($ErrMsg, $ErrNo, $ErrDie = null) {
    $CssClass = ($ErrNo == E_USER_NOTICE ? WS_INFOR : ($ErrNo == E_USER_WARNING ? WS_ALERT : ($ErrNo == E_USER_ERROR ? WS_ERROR : $ErrNo)));
    echo "<p class=\"trigger {$CssClass}\">{$ErrMsg}<span class=\"ajax_close\"></span></p>";

    if ($ErrDie):
        die;
    endif;
}

//PHPErro :: personaliza o gatilho do PHP
function PHPErro($ErrNo, $ErrMsg, $ErrFile, $ErrLine) {
    $CssClass = ($ErrNo == E_USER_NOTICE ? WS_INFOR : ($ErrNo == E_USER_WARNING ? WS_ALERT : ($ErrNo == E_USER_ERROR ? WS_ERROR : $ErrNo)));
    echo "<p class=\"trigger {$CssClass}\">";
    echo "<b>Erro na Linha: #{$ErrLine} ::</b> {$ErrMsg}<br>";
    echo "<small>{$ErrFile}</small>";
    echo "<span class=\"ajax_close\"></span></p>";

    if ($ErrNo == E_USER_ERROR):
        die;
    endif;
}

set_error_handler('PHPErro');