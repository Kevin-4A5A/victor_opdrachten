<?php
	session_start();
	$GLOBALS['BMI'] = 0;
	
	function achtergrond()
	{
		if($GLOBALS['BMI'] < 18.5)
		{	
			$_SESSION['Achtergrond'] = "yellow";
		}
		else if($GLOBALS['BMI'] < 25)
		{
			$_SESSION['Achtergrond'] = "green";
		}
		else if($GLOBALS['BMI'] < 30)
		{
			$_SESSION['Achtergrond'] = "red";
		}
		else
		{
			$_SESSION['Achtergrond'] = "purple";
		}		
	}
	
	function berekenBMI()
	{
		if((isset($_POST['submit'])) && (isset($_POST['lang'])) && (isset($_POST['dikte']))  )
		{
			$$GLOBALS['BMI'] = $_POST['dikte'] / ($_POST['lang'] * $_POST['lang']);
				
		achtergrond();
		return $$GLOBALS['BMI'];	
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<style>
body
{
	background-color: 
	<?php 
	if(isset($GLOBALS['BMI']))
	{
		echo $GLOBALS['BMI'];
	}
	else
	{ 
		echo $_SESSION['Achtergrond'];
	}   
	?> 
}
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
