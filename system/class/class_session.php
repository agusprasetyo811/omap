<?php 
/*------------------------------ 
Library class by Agus Prasetyo 
email: agusprasetyo811@gmail.com 
--------------------------------*/

class Session {
	
	function sess_on(){
		@session_start();
	}
	function sess_set($key,$val){
		@$sess_var = $_SESSION[$key]= $val;
		return $sess_var;
	}
	function sess_get($key){
		@$sess_var = $_SESSION[$key];
		return $sess_var;
	}
	function sess_kill(){
		@session_destroy();
	}
	function sess_unset($session){
		unset($session);
	}
}