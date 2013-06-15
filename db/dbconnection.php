<?php
require_once '../config/cfTrabalhos.php';
    
class dbConnection extends CfTrabalhos {
    
    private $user = 'root';
    private $pass = 'bancoigor';
    private $host = 'localhost';
    private $db = 'projeto_empresa';
    
    private function Connect() {
        $conn = new PDO("mysql:host=$this->host;dbname=$this->db;user=$this->user;pass=$this->pass");
        return $conn;
    }
    
    public function RunQuery($sql){
        $stm = $this->Connect()->prepare($sql);
        return $stm->execute();
    }
    
    public function RunSelect($sql){
        $stm = $this->Connect()->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
    
}

?>
