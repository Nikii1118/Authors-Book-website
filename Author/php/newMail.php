<?php
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
                $headers = 'From: ' . $_POST["firstname"] . ' <' . $_POST["email"] . '>';
		if(mail("nikita96goyal@gmail.com", $_POST["subject"], $_POST["body"], $headers))
                     echo "Mail successful!";
                else
                     echo "Mail unsuccessful";
	}
?>