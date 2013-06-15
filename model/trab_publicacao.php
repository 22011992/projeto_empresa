<?php
require_once ('db/dbconnection.php');

class trabPublicação extends dbConnection {
    private $id_trabalho;
    private $id_publicacao;
    
    public function setIdPublicacao($idPublicacao){
        $this->id_publicacao = $idPublicacao;
    }
    
    public function setIdTrabalho($idTrabalho){
        $this->id_trabalho = $idTrabalho;
    }
    
    public function getIdPublicacao(){
        return $this->id_publicacao;
    }

    public function getIdTrabalho(){
        return $this->id_trabalho;
    } 

}

?>
