<?php

	if (isset($_POST['accept']))
	{
		setcookie('Poulter', true);
	}
	else if (isset($_POST['decline']))
	{
		setcookie('Poulter', null, time()-100);
	}

?>

<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

<?php if ( (!isset($_COOKIE['Poulter'])) && (!isset($_POST['accept'])) || ((isset($_POST['decline']))) ):	?>	
		<div>
			Deze Websites maakt gebruikt van poulters.
			<form method="POST">
				<input name="accept" type="submit" value="I accepteer deze Poulter in mijn leven.">
			</form>
		</div>
<?php elseif ( (isset($_COOKIE['Poulter'])) || (isset($_POST['accept'])) ): ?>
		<div>
			ik wil geen poulters meer :(
			<form method="POST">
				<input name="decline" type="submit" value="I accepteer deze Poulter NIET MEER in mijn leven.">
			</form>
		</div>
		<img src="https://s-media-cache-ak0.pinimg.com/236x/60/47/00/60470042798ab56c74e97827f2870de6.jpg" width="300" height="500">
<?php endif; ?>
</body>
</html>