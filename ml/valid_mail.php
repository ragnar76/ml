<?php
	
	$email = '';
	$username = '';
	$is_ok1 = FALSE;
	$is_ok2 = FALSE;

	if(isset($_REQUEST["email"]))
	{
		$email = $_REQUEST["email"];
		if(filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			echo "your email address (".$email.") looks valid! <br>";
			$is_ok1 = TRUE;

		}
		else
		{
			echo "your mail is not valid!<br>";
		}
	}

	if(isset($_REQUEST["username"]))
	{
		$username = $_REQUEST["username"];

		if(preg_match("/^[a-zA-Z0-9]+$/", $username))
		{
			echo "your username (".$username.") is valid!<br>";
			$is_ok2 = TRUE;
		}
		else
		{
			echo "username is not vaild! <br>";
		}
	}

	if($is_ok1 == TRUE && $is_ok2 == TRUE)
	{
		echo "alles gut<br>";
	}

?>
