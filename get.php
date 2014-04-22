<?php

include("config.php");

	
	$id    = $_REQUEST['id'];
	//	echo $id;
   $result=mysql_query("select * from table5 where id ='$id'");
	
	while($row=mysql_fetch_array($result))
	{
		$image=$row['image'];
		header("Content-type:image/jpeg");
		echo $image;
	}
	

 



?>
