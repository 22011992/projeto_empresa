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

}	

?>