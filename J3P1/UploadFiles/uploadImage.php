<?php

if(isset($_POST['submit']))
{
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileUploadske"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

if(isset($_POST["submit"]))
{
    $check = getimagesize($_FILES["fileUploadske"]["tmp_name"]);
    if($check !== false) 
	{
        $uploadOk = 1;
    } 
	else 
	{
        $uploadOk = 0;
    }
}

if ($uploadOk == 0) 
{
    echo "Sorry, your file was not uploaded.";
} 
else 
{
    if (move_uploaded_file($_FILES["fileUploadske"]["tmp_name"], $target_file)) 
	{
		echo "<img src=$target_file />";
    } 
	else 
	{
        echo "Sorry, there was an error uploading your file.";
    }
}
}
 ?>
 
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action='' method='POST' enctype="multipart/form-data">
      <input type='file' name='fileUploadske' />
      <input type='submit' name='submit' />
    </form>
  </body>
</html>