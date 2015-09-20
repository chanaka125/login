<?php

class User{
	private $text = null;
	
	
	public function setText($body){
		$this->text = $body." \n".date("Y/m/d");
	}
	
	public function clearText() {
		$this->text = null;
	}
	
	public function getText() {
		return $this->text;
	}
	
}
?>