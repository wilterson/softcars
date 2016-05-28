<?php

/**
 * Created by PhpStorm.
 * User: Wilterson Garcia
 * Date: 28/05/2016
 * Time: 01:34
 */

/**
 * <b>Read.class:</b>
 * Classe responsável por leitura do banco de dados
 *
 * @copyright (c) 2016, Wilterson Garcia
 */
class Read extends Conn{

    private $Select;
    private $Places;
    private $Result;

    /** $var PDOStatement */
    private $Read;

    /** $var PDO */
    private $Conn;


    public function ExeRead( $Tabela, $Termos = null, $ParseString = null){
        if(!empty($ParseString)){
            parse_str($ParseString, $this->Places);

        }

        $this->Select = "SELECT * FROM {$Tabela} {$Termos}";
        //$this->Execute();
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
        $this->Conn() = parent::getConn();
        $this->Read = $this->Conn->prepare($this->Select);
        $this->Read->setFetchMode(PDO::FETCH_ASSOC);
    }

    private function getSyntaxe(){
        if ($this->Places){
            foreach ($this->Places as $Vinculo => $Valor){
                
            }
        }
    }

    private function Execute(){

    }
}

























