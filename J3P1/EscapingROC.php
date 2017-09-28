<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="">
<script src=""></script>
</head>
<body>

<form action="" method="POST">
<input name="inputty" type="text">
<input type="submit">
</form>

<?php if(ISSET($_POST["inputty"])){ echo htmlspecialchars($_POST["inputty"]); } ?>

</body>
</html>
