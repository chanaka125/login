<?php
//include_once 'core/user.php';
//$my = $GLOBALS['myglobe'];
//echo $my;

spl_autoload_register(function($file){	
	require_once 'classes/'.$file.'.php';
});

echo Admin::$name;
/* $usr = new User();
$usr->setText("body text");
echo $usr->getText(); */
	