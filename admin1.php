<body>
<h1>WELCOME ADMIN</h1>
<h2>You can upload your files here</h2>
<h3>File Upload:</h3>
Select a file to upload: <br />


<?php
include("config.php");
session_start();
$user_check=$_SESSION['login_user'];
$pass_check=$_SESSION['pass_user'];
if($user_check!='admin')
{header("location:login.php");}


?>
</body>

<form action="upload_file1.php" method="post" enctype="multipart/form-data">
<input type="file" name="image" />
<br />

<p>Enter the usernames who can have access to this file separated by a comma:<br/><input type="text" name="message"/></textarea></p>
<input type="submit" value="Upload File" />



</form>

<form action="/uploads" method="post" >
<input type="submit" value="All Uploads" />
<br />

</form>
