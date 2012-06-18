<?php 
/*------------------------------ 
Templates generator by Agus Prasetyo 
email: agusprasetyo811@gmail.com 
--------------------------------*/
include('system/php/php_config.php');
include('system/class/class_content.php');
$content = new Content();

$content->template(array(

	"BODY_CENTER" => @$BODY_CENTER,

),$TITLE_SITE,$_CONFIG['template_site']);