<?php
require_once 'db/dbconnection.php';

class publicacao extends dbConnection {
    private $id_publicacao;
    private $nome_publicacao;
    private $data_publicacao;
    
    public function getIdPublicacao() {
        return $this->id_publicacao;
    }

    public function setIdPublicacao($id_publicacao) {
        $this->id_publicacao = $id_publicacao;
        return $this;
    }

    public function getNomePublicacao() {
        return $this->nome_publicacao;
    }

    public function setNomePublicacao($nome_publicacao) {
        $this->nome_publicacao = $nome_publicacao;
        return $this;
    }

    public function getDataPublicacao() {
        return $this->data_publicacao;
    }

    public function setDataPublicacao($data_publicacao) {
        $this->data_publicacao = $data_publicacao;
        return $this;
    }


    
}

?>
