<?php

    require_once 'db/dbconnection.php';
    
    class trabAreas extends dbConnection {
        private $id_trabalho;
        private $id_area;
        
        
        public function getIdTrabalho() {
            return $this->id_trabalho;
        }

        public function setIdTrabalho($id_trabalho) {
            $this->id_trabalho = $id_trabalho;
            return $this;
        }

        public function getIdArea() {
            return $this->id_area;
        }

        public function setIdArea($id_area) {
            $this->id_area = $id_area;
            return $this;
        }


    }

?>
