<?php
class Config{
	public static function get($path = null){
		if($path){
			$con = $GLOBALS['config'];	
			$path = explode('/', $path);
			foreach ($path as $bit){
				if(isset($con[$bit])){
					$con = $con[$bit];	
				}
			}
			return $con;
		}else{
			return false;
		}	
		
	}
}
?>