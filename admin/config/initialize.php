<?php
/**
 * Created by PhpStorm.
 * User: Wilterson Garcia
 * Date: 26/05/2016
 * Time: 19:32
 */

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
