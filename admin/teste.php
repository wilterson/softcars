<?php
/**
 * Created by PhpStorm.
 * User: wilte_wm6vw14
 * Date: 28/05/2016
 * Time: 00:28
 */

require "config/initialize.php";

$read = new Read();
$read->ExeRead('teste', 'WHERE name = :nome', "name=Jose&id<=3&limit=3");

echo "<pre>";
print_r($read);
echo "</pre>";