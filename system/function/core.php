<?php

require_once 'common.php';
require_once 'system/php/php_config.php';
require_once 'system/class/class_content.php';

// Get Parameter p
if (isset($_GET['p'])) {
	$p = $_GET['p'];
} else {
	$p = 'omap';
}

// Instance Class Content
$content = content::getInstance();
$content->template();




// call controller page  
controller_page($p);





