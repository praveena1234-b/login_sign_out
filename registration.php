<?php 
class DB_con{
    function __construct()
{
    $db = mysqli_connect('localhost', 'root', '', 'survey');
    $this->dbh=$db;
    if(!$db){
die("not connected".mysqli_connect_error());
}
}
public function registration($user,$pass,$cpass){
    $ret=mysqli_query($this->dbh,"INSERT INTO users (user,pass,cpass) VALUES ('$user', '$pass','$cpass')");
    return $ret;
}
public function login($user,$pass){
    $ret=mysqli_query($this->dbh,"SELECT FROM users WHERE user='$user' and pass='$pass' ");
    return $ret;
}
public function feedback($a,$b,$c,$d){
    $ret=mysqli_query($this->dbh,"INSERT INTO feedbacks (1stqn,2ndqn,3rdqn,4thqn) VALUES ('$a','$b','$c','$d')");
    return $ret;
}
public function fetchdata(){
    $ret=mysqli_query($this->dbh,"SELECT * FROM  feedbacks");
    return $ret;
}
}    
?>
    
    <?php
$userdata=new DB_con();
if(isset($_POST['submit'])){
    
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
$sql=$userdata->registration($user,$pass,$cpass);
if($sql)
{
// Message for successfull insertion
echo "Registration successfull";
header('location:sfeedback.php');
}
else
{
// Message for unsuccessfull insertion
echo "Something went wrong. Please try again";
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title> Form</title>
<link rel="stylesheet" type="text/css" href="styl.css">
</head>
<body>
<div class="login">
<h1 align="center">Registration Form</h1>
<form action="" method="post" style="text-align:center;">
<input type="text" placeholder="Username" id="user" name="user"><br/><br/>
<input type="password" placeholder="Password" id="pass" name="pass"><br/><br/>
<input type="cpassword" placeholder="CPassword" id="cpass" name="cpass"><br/><br/>
<input type="submit" value="Register" name="submit">
</form>
<p>Already  User <a style="text-decoration: none;" href='login.php'>Login Here</a></p>
</body>
</html>
