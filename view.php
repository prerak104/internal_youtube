<?php

include("config.php");
	
	
	
	$result=mysql_query("select * from table4");
	
	while($row=mysql_fetch_array($result))
	{
		$image=$row['image'];
		header("Content-type:image/jpeg");
		echo $image;
	}
	




?>