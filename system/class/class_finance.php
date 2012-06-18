<?php 
/*------------------------------ 
Library class by Agus Prasetyo 
email: agusprasetyo811@gmail.com 
--------------------------------*/

class Finance {
	
	function rp($data) {
		$rupiah = "";
		$jml = strlen($data);
		while($jml > 3){
			$rupiah = "." . substr($data,-3) . $rupiah;
			$l = strlen($data) - 3;
			$data = substr($data,0,$l);
			$jml = strlen($data);
		}
 		$rupiah = "Rp " . $data . $rupiah . ",-";
 		return $rupiah;
	}	
}