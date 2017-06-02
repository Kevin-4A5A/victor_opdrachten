<?php

	$_SESSION['username'] = '';
	$_SESSION['role'] = '';
	include "classes/databaseHandlerClass.php";
	$databaseHandler = new dbHandler("localhost", "gebruikersrollen", "root", "");
	if(ISSET($_POST["submit"]))
	{
		$sql = 'SELECT * FROM gebruiker WHERE username = "' . $_POST["username"] . '" AND password = "'. $_POST["password"] . '";';
		$res = $databaseHandler->readData($sql);
		foreach($res as $row)
		{
			
			$_SESSION['username'] = $row['username'];
			$_SESSION['role'] = $row['role'];
		}
	}
	
	if(ISSET($_POST['loguit']))
	{
		session_unset();
		$_SESSION['username'] = '';
		$_SESSION['role'] = '';
	}
	
	if($_SESSION['username'] != '')
	{
		echo "Welkom " . $_SESSION['username'];
		echo 	'<form action="" method="POST" style="color: black;">
					<input type="submit" name="loguit" value="log uit">
				</form>';
	}
?>