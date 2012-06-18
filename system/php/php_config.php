<?php 
/*------------------------------ 
Configuration System Websites by Agus Prasetyo 
email: agusprasetyo811@gmail.com 
--------------------------------*/

/* --------------------------------------------------------------------------------------- 
Name_site merupakan deskripsi nama website yang akan di kerjakan. 
Misalnya OMAP-S-PHP-Framework. Di dalam Templates pemanggilan name_site 
ditulis didalam kurung-kurawal dan berhuruf kapital {NAME_SITE} */

$_CONFIG['name_site'] = "OMAP-S-PHP-Framework (b)";

/* ---------------------------------------------------------------------------------------
Desc_site merupakan deskripsi keterangan website yang akan di kerjakan. 
Misalnya OMAP-S-PHP-Framework Simple Framework. Developers by Agus Prasetyo 
email agusprasetyo811@gmail.com. Di dalam Templates pemanggilan desc_site 
ditulis didalam kurung-kurawal dan berhuruf kapital {DESC_SITE} */

$_CONFIG['desc_site'] = "Simple Framework. Developers by Agus Prasetyo email agusprasetyo811@gmail.com";

/* ---------------------------------------------------------------------------------------
Template_site merupakan nama template yang dipakai di website yang akan di kerjakan. 
Nama Template ini berwujud nama folder yang terletak didalam folder templates. 
Di dalam Templates pemanggilan tempalate_site ditulis didalam kurung-kurawal dan 
berhuruf kapital {TEMPLATE_SITE} */

$_CONFIG['template_site'] = "omap";

/* --------------------------------------------------------------------------------------- 
Author Site merupakan author dari pembuat websites. Pemanggilan author_site di templates 
ditulis dengan huruf besar dan ditulis didalam huruf kapital {AUTHOR_SITE}*/

$_CONFIG['author_site'] = '&copy; '. date('Y') .' - ' . $_CONFIG['name_site'];

/* ---------------------------------------------------------------------------------------
Site_url Websites merupakan url utama dari websites yang dibuat. Jika websites ini 
di upload di server maka tinggal di ganti site_urlnya. Sample di sini websites 
di load di localhost jdi penulisanya http://localhost/omap/. Contoh Pemanggilan site_url 
di template {SITE_URL} */

$_CONFIG['site_url'] = "http://localhost/omap.v.0.3/";

/* ---------------------------------------------------------------------------------------
Style Url Websites merupakan link yang dipakai untuk stylesheet. Penulisan di template 
menggunakan huruf kapital dan ditulis di dalam kurung kurawal {STYLE_URL} */

$_CONFIG['style_url'] = $_CONFIG['site_url'].'templates/'.$_CONFIG['template_site'].'/';

/* ---------------------------------------------------------------------------------------
Javascript Url Websites merupakan link yang dipakai untuk meng-link javascript. 
Penulisan di template menggunakan huruf kapital dan ditulis di dalam kurung kurawal {JS_URL} */

$_CONFIG['js_url'] = $_CONFIG['site_url'].'js/';

/* ---------------------------------------------------------------------------------------
JQuery Url Websites merupakan link yang dipakai untuk meng-link jquery. Penulisan di template 
menggunakan huruf kapital dan ditulis di dalam kurung kurawal {JQUERY_URL} */

$_CONFIG['jquery_url'] = $_CONFIG['site_url'].'system/plugin/jquery/';

/* ---------------------------------------------------------------------------------------
Images Url Websites merupakan link yang dipakai untuk meng-link images. Penulisan di template 
menggunakan huruf kapital dan ditulis di dalam kurung kurawal {IMG_URL} */

$_CONFIG['img_url'] = $_CONFIG['site_url'].'images/';
