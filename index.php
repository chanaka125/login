<?php 
include_once 'classes/user.php';
$user1 = new User();
$user1->setText("this is body of the msg");
echo $user1->getText();
?>
	
	