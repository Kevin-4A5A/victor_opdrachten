<?php

include_once('TOS.php');

$Number = 9;

function getParent($Tree, $number)
{
	$parent = 'null';
	
	foreach ($Tree as $array) 
	{
		if($array['value'] == $number)
		{
			$parent = $array;
		}
	}
	return $parent;
}

function getChild($Tree, $number)
{
	$children = [];
	
	foreach ($Tree as $array) 
	{
		if($array['parent'] == $number)
		{
			array_push($children ,$array['value']);
		}
	}
	return $children;
}


?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

<div>
Number is: <?php echo $Number; ?>
<br>
Parent is: <?php echo getParent($TOS, $Number)['parent']; ?>
<br>
Children are: <?php echo implode(', ', getChild($TOS, $Number)); ?>
</div>

</body>
</html>
