<?php 
/*------------------------------ 
Library class by Agus Prasetyo 
email: agusprasetyo811@gmail.com 
--------------------------------*/

class Link {
	
	function to($link){
		$links = "<script>window.location='".$link."';</script>";
		echo $links;
	}
	
	function location($link){
		header('Location: '.$link.'');
	}
	
	function refresh($long,$to){
		$refresh =	'<meta http-equiv="refresh" content="'.$long.';url='.$to.'">';
		echo $refresh;
	}
}