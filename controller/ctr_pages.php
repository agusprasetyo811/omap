<?php  
/*------------------------------ 
Configuration page by Agus Prasetyo 
email: agusprasetyo811@gmail.com 
--------------------------------*/

/* 
$BODY_CENTER merupakan isi untuk yang menjadi body sebuah websites. 
Isi sebuah websites dipisahkan didalam folder pages.
$TITLE_SITE merupakan title dari sebuah websites. $CONTENT_FILE & $TITLE_SITE ini wajib 
di isi didalam percabangan Switch Case. Untuk melakukan penambahan page hanya perlu 
menambahkan case 'parameter':. Parameter ini diambil dari default variable $p = $_GET['p'] 
yang menunjukan percabangan setiap page. 
*/

switch($p){

default:
	$TITLE_SITE = 'Welcome';
	$BODY_CENTER = 'pages/welcome';     
	break;	
}
