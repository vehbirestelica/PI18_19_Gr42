<?php

	function __autoload($class)
	{
		require 'emailer.php';
		require 'settings.php';
		require 'messages.php';
	}

	$email = new emailer();
	$email->GenerateMsg('Hows life?', 'Good');
	echo $email->SendMsg();

	echo "<br><br>";

	$msg=new messages;
	$msg->CreateMsg('Hey There');
	echo $msg->PostMsg();

?>