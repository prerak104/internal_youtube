

<body>
<h1>Welcome</h1>
<?php
include('config.php');
session_start();
$user_check=$_SESSION['login_user'];
$pass_check=$_SESSION['pass_user'];


$sql="select * from table5 ";

$rs=mysql_query($sql);

echo "hi ".$user_check;


$string="\r\n";
echo nl2br($string);
echo nl2br($string);
echo nl2br($string);

$count=mysql_num_rows($rs);
//echo $count;
$row = mysql_fetch_array($rs);
//echo $row['Access']."<br/>";


while($row = mysql_fetch_array($rs))
{

$arr=explode(",",$row['access']);
for($x=0;$x<sizeof($arr);$x++)
{
if($arr[$x]==$user_check)
{
	//echo $user_check."<br/>";
	$image=$row['image'];
	echo "123";
	echo "<img src='get.php?id=$row[id]'>";
}
}
}

	
?> 
</body>