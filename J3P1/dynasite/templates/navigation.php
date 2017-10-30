<ul>
<?php

$sql = "SELECT pageName FROM page";
$result = $conn->query($sql);

$page = 'home';

if(isset($_GET['page']))
{
	$page = $_GET['page'];
}

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		if($page == $row["pageName"])
		{
			echo "<li class='active'> <a href='?page=" . $row["pageName"]. "'>" . $row["pageName"]. "</a></li>";
		}
		else 
		{
			echo "<li> <a href='?page=" . $row["pageName"]. "'>" . $row["pageName"]. "</a></li>";
		}
	}
}
?>
</ul>