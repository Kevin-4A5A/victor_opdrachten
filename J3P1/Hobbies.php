<?php

$hobbies = [
	'Hacking',
	'Drinking',
	'Streaking',
	'Doing Nothing',
	'Sleeping',
	'LARPing',
	'Stalking',
	'WILL POULTERING'
];

$lijst = "<table><tr><th>Hobbies</th></tr>";

for($i = 0; $i < count($hobbies); $i++)
{
	$lijst .=  '<tr><td>'. $hobbies[$i] . '</td></tr>';
}

$lijst .= "</table><br><br><br>";
echo $lijst;
?>

<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>

<?php 	if(ISSET($hobbies)): ?>	
	<table>
	<tr><th>Hobbies</th></tr>
<?php	for($e = 0; $e < count($hobbies); $e++): ?>		
	<tr><td>
	<?php echo $hobbies[$e]; ?>
	</td></tr>'
<?php	endfor 	?>	
	</table>
<?php endif;  	?>

</body>
</html>
