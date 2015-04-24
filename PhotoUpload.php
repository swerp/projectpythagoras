<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title> Pythagoras File upload </title>
</head>


<body>
<form action="PhotoUpload.php" method="POST" enctype="multipart/form-data">
	<input type="file" name ="image"><input type="submit" name="submit" value ="Upload">
</form>


<?php
	
if(isset($_POST['submit']))
{
	//connect to database
	require_once 'core/init.php';
	
	$imageName = mysql_real_escape_string($_FILES["image"]["name"]);
	$imageData = mysql_real_escape_string(file_get_contents($_FILES["image"]["tmp_name"]));
	$imageType = mysql_real_escape_string($_FILES["image"]["type"]);
	
	//read first 5 cha of the file to see if it's an image file...
	if(substr($imageType,0,5)== "image")
	{
		//add record to DB  table fields are id (AI field),
		mysql_query("INSERT INTO 'image' VALUES ('', '$imageName', $imageData)");
		echo "image has been uploaded";
	}		
	else
	{
		echo "Only images are allowed!";
	}

	
	
	
}

?>

</body>
</html>
