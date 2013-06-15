<?php
require_once ('db/dbconnection.php');

class pessoa extends dbConnection{
    
    private $id_pessoa;
    private $name_pessoa;
    
    public function setIdPessoa($idPessoa){
        $this->id_pessoa = $idPessoa;
    }
    
    public function getIdPessoa(){
        return $this->id_pessoa;
    }
    
    public function setNamePessoa($name) {
        $this->name_pessoa = $name;
    }
    
    public function getNamePessoa(){
        $this->name_pessoa;
    }
}

?>
