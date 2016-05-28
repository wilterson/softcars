<?php

/**
 * Created by PhpStorm.
 * User: Wilterson Garcia
 * Date: 28/05/2016
 * Time: 03:00
 */

/**
 * <b>Read.class:</b>
 * Classe responsável por leitura do banco de dados
 *
 * @copyright (c) 2016, Wilterson Garcia
 */
class Read extends Conn{

    private $Tabela;
    private $Dados;
    private $Result;

    /** $var PDOStatement */
    private $Create;

    /** $var PDO */
    private $Conn;


    public function ExeCreate( $Tabela, array $Dados){

    }

    public function getResult(){
        return $this->Result;
    }


    /**
     * ****************************************
     * *********** PRIVATE FUNCTIONS **********
     * ****************************************
     */

    private function Connect(){

    }

    private function getSyntaxe(){

    }

    private function Execute(){

    }
}