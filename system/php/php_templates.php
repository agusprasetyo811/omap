<?php 
/*------------------------------ 
Templates generator by Agus Prasetyo 
email: agusprasetyo811@gmail.com 
--------------------------------*/
require('system/php/php_config.php');
require('system/class/class_content.php');
require('controller/ctr_var.php');
$content = new Content();

// Content Template
$content->template($set_var,$TITLE_SITE,$_CONFIG['template_site']);