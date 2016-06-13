<?php

class USER extends Conn{
    
    private $Result;

    /** $var PDO */
    private $conn;

    /**
     * @return mixed
     */
    public function __construct(){
        $database = new Conn();
        $db = $database->getConn();
        $this->conn = $db;
    }

    public function doLogin($login,$pass){
        try{
            $stmt = $this->conn->prepare("SELECT l.id_passageiro, l.login, l.password, u.id, u.ativo
                                            FROM login l, usuarios u WHERE l.login=:email AND l.id_passageiro = u.id AND l.password = :pass AND u.ativo = :ativo");
            $stmt->execute(array(':email'=>$login, ':pass'=>$pass, ':ativo'=>1));
            $userRow=$stmt->fetch(PDO::FETCH_ASSOC);

            if($stmt->rowCount() == 1){
                if($userRow["password"] == $pass){
                    session_start();
                    $_SESSION['user_id'] = $userRow['id_passageiro'];
                    return true;
                }else{
                    return false;
                }
            }
        }catch (PDOException $e){
            $this->Result = null;
            WSErro("<b>Erro ao logar:</b> {$e->getMessage()}", $e->getCode());
        }
    }

    public function is_loggedin()
    {
        if(isset($_SESSION['user_id']))
        {
            return true;
        }
    }

    public function redirect($url)
    {
        header("Location: $url");
    }

    public function doLogout()
    {
        session_destroy();
        unset($_SESSION['user_id']);
        return true;
    }
}
