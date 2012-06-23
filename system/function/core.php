<?php

require_once 'common.php';

// Get Parameter p
if (isset($_GET['p'])) {
	$p = $_GET['p'];
} else {
	$p = 'omap';
}
// call controller page  
controller_page($p);





