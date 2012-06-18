<?php 
/*------------------------------ 
Library class by Agus Prasetyo 
email: agusprasetyo811@gmail.com 
--------------------------------*/

class Date {
	
	function tgl(){
		$tgl = date('j');
		return $tgl;
	}
	
	function hari(){
		$hari = array('Minggu','Senin','Selasa','Rabu','Kamis','Jumat','Sabtu');
		$day = date('w');
		return $hari[$day];
	}
	
	function bln(){
		$bulan = array('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember');
		$mounth = date('n');
		$mounth = $mounth - 1;
		return $bulan[$mounth];
	}
	
	function thn(){
		$thn = date('Y');
		return $thn;
	}
	
	function tgl_num(){
		$tgl = date('j');
		return $tgl;
	}
	
	function hari_num(){
		$day = date('w');
		return $day;
	}
	
	function bln_num(){
		$mounth = date('n');
		return $mounth;
	}
	
	function thn_num(){
		$thn = date('Y');
		return $thn;
	}
	
	function dates(){
		return $this->hari() .", ". $this->tgl() . " " . $this->bln() . " " . $this->thn();
	}
	
	function dates_num(){
		return $this->tgl_num() . "/" . $this->bln_num() . "/" . $this->thn_num();
	}
	
	function times(){
		$date_server = mktime(date('G'),date('i'),date('s'),date('n'),date('j'),date('Y'));
		$time_server = date('H:i:s',$date_server);
		$gmt_match = substr(date('O',$date_server),1,2);
		$gmt_match_second = 60*60*$gmt_match;
		if(substr(date('O',$date_server),0,1)=='+'){
			$date_gmt = $date_server-$gmt_match_second; 
		}else{
			$date_gmt = $date_server+$gmt_match_second; 
		}
		$time_gmt = date('H:i:s',$date_gmt);
		$date_match_indo = 60*60*7;
		$date_indo = $date_gmt+$date_match_indo;
		$time_indonesia = date('H:i:s',$date_indo);		
		return $time_indonesia;
	}
	
}