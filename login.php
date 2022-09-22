<?php 
 include("registration.php");
 $userdata=new DB_con();
 if (isset($_POST['submit'])) {
	$user = $_POST['user'];
    $pass = $_POST['pass'];
        
$sql=$userdata->login($user,$pass);
while($row = mysqli_fetch_row($sql))
{
header('location: sresults.php');
}
}
 ?>
 
<!DOCTYPE html>
<html>
<head>
<title>login Form</title>
<link rel="stylesheet" type="text/css" href="styl.css">
</head>
<body>
<div class="login">
<h1 align="center">Login</h1>
<form action="" method="post" style="text-align:center;">
<input type="text" placeholder="Username" id="user" name="user"><br/><br/>
<input type="password" placeholder="Password" id="pass" name="pass"><br/><br/>
<input type="submit" value="login" name="submit">
</form>
</body>
</html>