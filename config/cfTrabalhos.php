<?php
	
class CfTrabalhos {

	public function dateToBR($dateAmericana){
		$d = explode('-', $dateAmericana);
		$dOk = $d[2].'/'.$d[1].'/'.$d[0];
		return $dOk;
	}

	public function dateToUS($dateBrasil){
		$d = explode('/', $dateBrasil);
		$dOk = $d[2].'-'.$d[1].'-'.$d[0];
		return $dOk;
	}
        
        public function dateTimeBR($date_americana_his){
            $d = explode(' ', $date_americana_his);
            $dOk = $this->dateToBR($d[0]).' '.$d[1];
            return $dOk;
        }
        
        public function dateTimeUS($date_brasil_his){
            $d = explode(' ', $date_brasil_his);
            $dOk = $this->dateToUS($d[0]).' '.$d[1];
            return $dOk;
        }

}	

?>