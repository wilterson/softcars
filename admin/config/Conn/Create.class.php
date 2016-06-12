<?php

/**
 * Created by PhpStorm.
 * User: Wilterson Garcia
 * Date: 28/05/2016
 * Time: 01:34
 */

/**
 * <b>Create.class:</b>
 * Classe responsável por inclusão no banco de dados
 *
 * @copyright (c) 2016, Wilterson Garcia
 */
class Create extends Conn{

    private $Tabela;
    private $Dados;
    private $Result;
    private $StatusInsert = false;

    /** $var PDOStatement */
    private $Create;

    /** $var PDO */
    private $Conn;

    /**
     * <b>ExeCreate: </b> Executa um cadastro simplificado no BD utilizando Prepare Statements
     * Basta informar o nome da tabela e um array com os dados.
     *
     * @param STRING $Tabela = Informe o nome da tabela do banco de dados
     * @param ARRAY $Dados = Informe um array atribuitivo. ( nome_coluna => valor)
     */
    public function ExeCreate( $Tabela, array $Dados){
        $this->Tabela = (string) $Tabela;
        $this->Dados = $Dados;

        $this->getSyntaxe();
        $this->Execute();
    }

    /**
     * <b>getResult</b> Retorna o result do cadastro ou o id do ultimo cadastro efetuado com sucesso
     *
     * @param STRING = ID do ultimo cadastro, caso sucesso.
     */
    public function getResult(){
        return $this->Result;
    }

    /**
     * <b>getStatus</b> Retorna o status do cadastro True se inseriu, False se não.
     *
     * @param BOOLEAN = Status do insert
     **/
    public function getStatus(){
        return $this->StatusInsert;
    }

    /**
     * ****************************************
     * *********** PRIVATE FUNCTIONS **********
     * ****************************************
     */

    // Obtem o PDO e prepara a query
    private function Connect(){
        $this->Conn = parent::getConn();
        $this->Create = $this->Conn->prepare($this->Create);
    }

    //Cria a sintaxe da query para Prepared Statements
    private function getSyntaxe(){
        $Fields = implode(', ', array_keys($this->Dados));
        $Places = ':' . implode(', :', array_keys($this->Dados));

        $this->Create = "INSERT INTO {$this->Tabela} ({$Fields}) VALUES ({$Places})";
    }

    //Obtem a conexao e a sintaxe, executa a query.
    private function Execute(){
        $this->Connect();

        try{
            $this->Create->execute($this->Dados);
            $this->Result = $this->Conn->lastInsertId();
            $this->StatusInsert = true;

        }catch (PDOException $e){
            $this->Result = null;
            WSErro("<b>Erro ao cadastrar:</b> {$e->getMessage()}", $e->getCode());
        }
    }
}

























