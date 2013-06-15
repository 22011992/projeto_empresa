<?php

require_once ('db/dbconnection.php');

class funcoes extends dbConnection{
    
    private $id_trabalho;
    private $id_publicacao;
    private $email_pessoa;
    private $funcao;    
    private $instituicao;
    
    public function setIdPublicacao($idPublicacao){
        $this->id_publicacao = $idPublicacao;
    }
    public function getIdPublicacao() {
        return $this->id_publicacao;
    }
    
    public function setIdTrabalho($idTrabalho){
        $this->id_trabalho = $idTrabalho;
    }
    public function getIdTrabalho(){
        return $this->id_trabalho;
    } 
    
    public function setEmailPessoa($emailPessoa){
        $this->email_pessoa = $emailPessoa;
    }
    public function getEmail_pessoa() {
        return $this->email_pessoa;
    }
    
    public function setFuncao($funcao){
        $this->funcao = $funcao;
    }
    public function getFuncao() {
        return $this->funcao;
    }
    
    public function setInstituicao($instituicao){
        $this->instituicao = $instituicao;
    }
    public function getInstituicao() {
        return $this->instituicao;
    }

}

?>
