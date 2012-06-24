<?php
/*------------------------------ 
Configuration page by Agus Prasetyo 
email: agusprasetyo811@gmail.com 
--------------------------------*/

function controller_page($c_page) {
	if (!file_exists('controller/'.$c_page.'.php')) {
		exit($c_page.'.php' .' not available in controller.');
	} else {
		return require_once 'controller/'.$c_page.'.php';
	}
}

function pages($pages) {
if (!file_exists('pages/'.$pages.'.php')) {
		exit($pages.'.php' .' not available in pages.');
	} else {
		ob_start();
		require_once 'pages/'.$pages.'.php';
		$set_pages = ob_get_contents();
		ob_end_clean();
	}
}