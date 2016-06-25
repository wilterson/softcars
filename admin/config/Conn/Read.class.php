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
        $this->Execute();
    }

    public function getResult(){
        return $this->Result;
    }

    public function getRowCount(){
        return $this->Read->rowCount();
    }

    public function fullRead($Query, $ParseString = null){
        $this->Select = (string) $Query;

        if(!empty($ParseString)){
            parse_str($ParseString, $this->Places);
        }

        $this->Execute();
    }

    public function setPlaces($ParseString){
        parse_str($ParseString, $this->Places);
        $this->Execute();
    }

    /**
     * ****************************************
     * *********** PRIVATE FUNCTIONS **********
     * ****************************************
     */

    private function Connect(){
        $this->Conn= parent::getConn();
        $this->Read = $this->Conn->prepare($this->Select);
        $this->Read->setFetchMode(PDO::FETCH_ASSOC);
    }

    private function getSyntaxe(){
        if ($this->Places){
            foreach ($this->Places as $Vinculo => $Valor){
                if($Vinculo == 'limit' || $Vinculo == 'offset'){
                    $Valor = (int) $Valor;
                }

                $this->Read->bindValue( ":{$Vinculo}", $Valor, (is_int($Valor) ? PDO::PARAM_INT : PDO::PARAM_STR));
            }
        }
    }

    private function Execute(){
        $this->Connect();
        try{
            $this->getSyntaxe();
            $this->Read->Execute();
            //$this->Result = $this->Read->fetchObject(__CLASS__);
            $this->Result = $this->Read->fetchAll();
        }catch(PDOException $e) {
            $this->Result = null;
            WSErro("<b>Erro ao ler do banco:</b> {$e->getMessage()}", $e->getCode());
        }
    }
}

























