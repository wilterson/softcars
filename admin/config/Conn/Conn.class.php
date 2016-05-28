<?php

/**
 * Created by PhpStorm.
 * User: Wilterson Garcia
 * Date: 28/05/2016
 * Time: 00:31
 */

/**
 * Conn.class [ CONEXAO ]
 * Classe abstrata de conexão padrao Singleton
 * Retorna um Obj PDO pelo metodo estático getConn()
 *
 * @copyright (c) 2016, Wilterson Garcia
 */
class Conn {

    private static $Host = HOST;
    private static $User = USER;
    private static $Pass = PASS;
    private static $Db = DB;

    /** @var  PDO */
    private static $Connect = null;

    /**
     * Conecta com o Banco de dados com o Pattern Sigleton
     * Retorna um Objeto PDO!
     */
    private static function Conectar(){
        try{
            if(self::$Connect == null){
                $dns = 'mysql:host='. self::$Host .';dbname='. self::$Db;
                $options = [ PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8' ];

                self::$Connect = new PDO( $dns, self::$User, self::$Pass, $options );
            }
        }catch(PDOException $e) {
            PHPErro($e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine());
            die;
        }

        self::$Connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return self::$Connect;
    }

    /** Retorna um objteo PDO sigleton Pattern*/
    public static function getConn(){
        return self::Conectar();
    }
}