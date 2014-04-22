<?php

include("config.php");
session_start();
$user_check=$_SESSION['login_user'];
$pass_check=$_SESSION['pass_user'];
$string="\r\n";
if($user_check!='admin')
{header("location:login.php");}

$usernames=$_POST["message"];
	echo nl2br($string);
	echo "The List of allowed users are:".$usernames;
	//$strSQL = "INSERT INTO table1(url,user,Access) VALUES('$address','admin','$usernames')";


$image=addslashes(file_get_contents($_FILES['image']['tmp_name']));

$image_name=addslashes($_FILES['image']['name']);
$image_size=getimagesize($_FILES['image']['tmp_name']);


	if($image_size==FALSE)
	{echo "That's not an image";
	 header("location:admin1.php");	
	 }
	
	else
	{
	  $result=mysql_query("INSERT INTO table5 values('','$image','$usernames')");
	  echo "<img src='get.php'>";
	  
	  
	  
	}

	



	
echo nl2br($string);
echo nl2br($string);
echo nl2br($string);

  
  echo nl2br($string);
  
  echo "The address of the file to be updated in the database is localhost/uploads/".$_FILES["image"]["name"];
  
  $address="localhost/uploads/".$_FILES["image"]["name"];
  
   
  echo nl2br($string);
  echo "ADDRESS=".$address;


  
  
  
	
	
	
  ?>
  
  
  <form action="admin.php" method="post">

<h2>Click the button to upload more files:<br/></h2>


<input type="submit" value="Upload More"/><br/>
</form>