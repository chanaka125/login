<?php
include_once 'core/user.php';
/* $date = date("Y/m/d");
echo $date; */
	$user1 = new User();
	$user1->setText("this is body of the msg");
	echo $user1->getText();
	