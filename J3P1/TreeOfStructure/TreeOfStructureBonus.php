<?php

include_once('TOS.php');


function getTree($Tree)
{
	$Output = '';
	
	foreach ($Tree as $array) 
	{
		if($array['parent'] == null)
		{
			$Output .= '<ul><li>' . $array['value'];
			$Output .= KutKinderen($array, $Tree);	
			$Output .= '</li></ul>';
		}
	}
	$Output .= '</ul></ul>';
	return $Output;
}

function KutKinderen($parent, $Tree)
{
	$Output = '';
	foreach($Tree as $array)
	{
		if($array['parent'] == $parent['value'])
		{
			$Output .= '<ul><li>' . $array['value'] . '</li><ul>';
			$Output .= KutKinderen($array, $Tree);
			$Output .= '</ul></ul>';
		}
	}
	return $Output;
}

?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

<div>
<?php echo getTree($TOS); ?>
</div>

</body>
</html>
