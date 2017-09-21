<?php
	
	$GLOBALS['BMI'] = 0;
	
	function berekenBMI()
	{
		if((isset($_POST['submit'])) && (isset($_POST['lang'])) && (isset($_POST['dikte']))  )
		{
			$GLOBALS['BMI'] = $_POST['dikte'] / ($_POST['lang'] * $_POST['lang']);			
			return $GLOBALS['BMI'];	
		}
	}
	
	
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<style>
</style>
</head>
<body>
<form method="POST">
	Gewicht:
	<input type="number" name="dikte">
	<br>
	Lengte:
	<input type="number" step=".01" name="lang">
	<br>
	<input type="submit" name="submit" value="BEREKEN">
</form>
<br>
<br>
<div id="BMI">
<?php
	echo berekenBMI();
?>
</div>
</body>
</html>
