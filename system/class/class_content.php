<?php 
/*------------------------------ 
Library class by Agus Prasetyo 
email: agusprasetyo811@gmail.com 
--------------------------------*/

class content {
	
	private static $instance;
	
	public function __construct(){
		 
	}
	
	public static function &getInstance() {
		if (!self::$instance) {
			self::$instance = new content();
		}
		return self::$instance;
	} 
	
	public function template($key,$title_site,$template){
		
		include('system/php/php_config.php');
		include('system/php/php_default_var.php');
		include('class_database.php');
		include('class_link.php');
		include('class_session.php');
		include('class_files.php');
		include('class_finance.php');
		include('class_date.php');
		include('class_validation.php');

		$db = new DB();
		$link = new Link();
		$sess = new Session();
		$file = new File();
		$finance = new Finance();
		$date = new Date();
		$cek = new Validate();
		
		$key_index = array_keys($key);
		$count = count($key);
				
		for($obj=0;$obj<$count;$obj++){
			ob_start(); 
			@include ($key[$key_index[$obj]] . '.php');
			$VAR[$key_index[$obj]] = ob_get_contents();
			ob_end_clean();
		}
		
		ob_start();  
		$VAR['TITLE_SITE'] = $title_site; 
		ob_end_clean(); 
		
		$key_config  = array_keys($_CONFIG);
		foreach($key_config as $keys){ 
    		$VAR[strtoupper($keys)] = $_CONFIG[$keys]; 
		}
		
		include ('templates/'.$template . '/index.php'); 
		$site_var = ob_get_contents();
		ob_end_clean();
		$OUTPUT = preg_replace('/\{(\w+)\}/e',"\$VAR['\\1']",$site_var); 
		echo $OUTPUT;
	}
}