<?php

/**
 * Created by PhpStorm.
 * User: Wilterson Garcia
 * Date: 28/05/2016
 * Time: 02:40
 */

/**
 * <b>Update.class:</b>
 * Classe responsável por atualizações em registros do banco de dados
 *
 * @copyright (c) 2016, Wilterson Garcia
 */
class Update extends Conn{

    private $Tabela;
    private $Dados;
    private $Termos;
    private $Places;
    private $Result;

    /** $var PDOStatement */
    private $Update;

    /** $var PDO */
    private $Conn;


    public function ExeUpdate( $Tabela, array $Dados, $Termos, $ParseString){
        $this->Tabela = (string) $Tabela;
        $this->Dados = $Dados;
        $this->Termos = (string) $Termos;

        parse_str($ParseString, $this->Places);
        $this->getSyntaxe();
        $this->Execute();
    }

    public function getResult(){
        return $this->Result;
    }

    public function getRowCount(){
        return $this->Update->rowCount();
    }

    public function setPlaces($ParseString){
        parse_str($ParseString, $this->Places);
        $this->getSyntaxe();
        $this->Execute();
    }
    /**
     * ****************************************
     * *********** PRIVATE FUNCTIONS **********
     * ****************************************
     */

    private function Connect(){
        $this->Conn = parent::getConn();
        $this->Update = $this->Conn->prepare($this->Update);
    }

    private function getSyntaxe(){
        foreach ($this->Dados as $Key => $Value) {
            $Places[] = $Key . ' = :' . $Key;
        }

        $Places = implode(', ', $Places);
        $this->Update = "UPDATE {$this->Tabela} SET {$Places} {$this->Termos}";

    }

    private function Execute(){
        $this->Connect();

        try{
            $this->Update->Execute(array_merge($this->Dados, $this->Places));
            $this->Result = true;
        }catch(PDOException $e) {
            $this->Result = null;
            WSErro("<b>Erro ao atualizar o banco:</b> {$e->getMessage()}", $e->getCode());
        }
    }
}