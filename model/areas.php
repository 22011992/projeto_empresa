<?php
require_once 'db/dbConnection.php';

class areas extends dbConnection {
    private $id_areas;
    private $nome_area;
    
    public function getIdAreas() {
        return $this->id_areas;
    }

    public function setIdAreas($id_areas) {
        $this->id_areas = $id_areas;
        return $this;
    }

    public function getNomeArea() {
        return $this->nome_area;
    }

    public function setNomeArea($nome_area) {
        $this->nome_area = $nome_area;
        return $this;
    }


}
?>
