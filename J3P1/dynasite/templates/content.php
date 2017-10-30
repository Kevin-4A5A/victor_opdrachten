<?php
$page = 'home';

if(isset($_GET['page']))
{
	$page = $_GET['page'];
}

$sql = "SELECT content FROM page WHERE pageName = '$page'";
$result = $conn->query($sql);

$row = $result->fetch_assoc();
echo $row["content"];

$conn->close();
?>