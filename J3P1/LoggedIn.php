<?php session_start(); 

$username = "Will";
$password = "Poulter";

if(ISSET($_POST['LogIn']))
{
	if(($_POST['username'] == $username) && ($_POST['password'] == $password))
	{
		$_SESSION['LoggedIn'] = true;
	}
	else
	{
		echo 'You are not the real Poulter';
	}
}
else if(ISSET($_POST['LogOut']))
{
	unset($_SESSION['LoggedIn']);
	session_destroy();
}


if(!ISSET($_SESSION['LoggedIn']))
{
	$_SESSION['LoggedIn'] = false;
}
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

<?php if($_SESSION['LoggedIn'] === true){ 
	echo 'Welcome Mr. Poulter.';
?>
<form action='' method='POST'>
	<input type='submit' name='LogOut' value='Log Out'>
</form>
<?php }else{ ?>
<form action='' method='POST'>
	USSRname: <input name='username' type='text'><br>
	Password: <input name='password' type='password'><br>
	<input type='submit' name='LogIn' value='Log In'><br>
</form>
<?php } ?>


</body>
</html>


