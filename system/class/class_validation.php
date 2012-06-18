<?php 
/*------------------------------ 
Library class by Agus Prasetyo 
email: agusprasetyo811@gmail.com 
--------------------------------*/

class Validate {
	
	function email($email){
		return @eregi( "^[0-9a-z]([-_.]?[0-9a-z])*@[0-9a-z]([-.]?[0-9a-z])*\\.[a-z]{2,3}$", $email );
	}
	
	function no($key){
		return @eregi( "^[0-9]+$", $key);
	}
}