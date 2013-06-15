<?php

    require_once 'db/dbconnection.php';
    
    class Trabalho extends dbConnection {
        
        private $id_trabalho;
        private $titulo;
        private $resumo;
        private $palavra_chaves;
        private $arquivos;
        private $date_cad;
        private $referencias;
        private $hipotese;
        private $metodologia;
        private $objetivo;
        private $resultado;
        
        public function getIdTrabalho() {
            return $this->id_trabalho;
        }
        public function setIdTrabalho($id_trabalho) {
            $this->id_trabalho = $id_trabalho;
            return $this;
        }

        public function getTitulo() {
            return $this->titulo;
        }
        public function setTitulo($titulo) {
            $this->titulo = $titulo;
            return $this;
        }

        public function getResumo() {
            return $this->resumo;
        }
        public function setResumo($resumo) {
            $this->resumo = $resumo;
            return $this;
        }

        public function getPalavraChaves() {
            return $this->palavra_chaves;
        }
        public function setPalavraChaves($palavra_chaves) {
            $this->palavra_chaves = $palavra_chaves;
            return $this;
        }

        public function getArquivos() {
            return $this->arquivos;
        }
        public function setArquivos($arquivos) {
            $this->arquivos = $arquivos;
            return $this;
        }

        public function getReferencias() {
            return $this->referencias;
        }
        public function setReferencias($referencias) {
            $this->referencias = $referencias;
            return $this;
        }

        public function getHipotese() {
            return $this->hipotese;
        }
        public function setHipotese($hipotese) {
            $this->hipotese = $hipotese;
            return $this;
        }

        public function getMetodologia() {
            return $this->metodologia;
        }
        public function setMetodologia($metodologia) {
            $this->metodologia = $metodologia;
            return $this;
        }

        public function getObjetivo() {
            return $this->objetivo;
        }
        public function setObjetivo($objetivo) {
            $this->objetivo = $objetivo;
            return $this;
        }

        public function getResultado() {
            return $this->resultado;
        }
        public function setResultado($resultado) {
            $this->resultado = $resultado;
            return $this;
        }
        
        public function getDateCad($us=false) {
            if($us){
                return $this->date_cad;
            }else{
                return $this->date_cad = $this->dateTimeBR(date_cad);
            }   
        }
        public function setDateCad($datetimeBR) {
            $this->date_cad = $this->dateTimeUS($datetimeBR);
        }
    
    }
    

?>
