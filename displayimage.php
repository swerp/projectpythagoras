<?php
  require_once 'core/init.php';
	
	if(isset($_GET['id']))
	{
		$id = mysql_real_escape_string($_GET['id']);
		$query = mysql_query("SELECT * FROM 'image' WHERE 'id' = '$id'");
		while($row = mysql_fetch_assoc($query))
		{
			$imageData = $row["image"];
		}
				
	}
	else
	{
		echo "Error!";
	}
	

?>
