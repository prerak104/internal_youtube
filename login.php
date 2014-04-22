

<?php
include("config.php");
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{

$myusername=addslashes($_POST['username']);
$mypassword=addslashes($_POST['password']);

if($myusername=='admin' && $mypassword=='admin')
{
   session_register("myusername");
$_SESSION['login_user']=$myusername;
$_SESSION['pass_user']=$mypassword;

   
   
   header("location:admin1.php");
}


else{
$error="Invalid Credentials";
echo $error;}

$sql="select user from table2 where user='$myusername' and 
pass='$mypassword'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$active=$row['active'];
$count=mysql_num_rows($result);





if($count==1)
{
session_register("myusername");
$_SESSION['login_user']=$myusername;
$_SESSION['pass_user']=$mypassword;
header("location:welcome1.php");
}
else
{
$error="Invalid Credentials";
echo $error;
}
}
?>

<form action="" method="post">
<h1>WELCOME TO INTERNAL YOUTUBE<br/></h1>
<h2>Please enter your credentials<br/></h2>

<label>Username:</label>
<input type="text" name="username"/><br/>
<label>Password:</label>
<input type="text" name="password"/><br/>
<input type="submit" value="Submit"/><br/>
</form>









