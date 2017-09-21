<?php

if(ISSET($_GET['submit']))
{
	$Color = $_GET['Color'];
	setcookie('Color', $Color);
}
else if(ISSET($_COOKIE['Color']))
{
	$Color = $_COOKIE['Color'];
}
else
{
	$Color = '#ffffff';
}	

?>
<!DOCTYPE html>
<html>
<head>
<title></title>

<style>
body
{
	background-color: <?php echo $Color; ?>
}
</style>
</head>
<body>

<form action='' method='GET'>
	<input type='color' name='Color'>
	<input type='submit' name='submit'>
</form>

</body>
</html>
