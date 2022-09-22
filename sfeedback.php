<?php
include("registration.php");
$userdata=new DB_con();
if(isset($_POST['submit'])){
    
    $a = $_POST['Q1'];
    $b = $_POST['Q2'];
    $c = $_POST['Q3'];
    $d =$_POST['Q4'];
$sql=$userdata->feedback($a,$b,$c,$d);
if($sql)
{
// Message for successfull insertion
echo "Registration successfull";
header('location:fetch.php');
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
<meta charset="UTF-8">
<title>Welcome to Feedback</title>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<h1>Fill This Survey Form</h1>
 <form  action="" method="post">
<h2>Your Product Name?</h2>
    <label for="products">Choose a product:</label>

<select name="Q1">
  <option  value="Santhoor">Santhoor</option>
  <option value="Rexona">Rexona</option>
  <option value="Lux">Lux</option>
</select>
        <h3> Product Quality?</h3>
        <div class="ratings">
            <input type="radio" name="Q2" class="rating" id="rating1" value="good">good 
            <input type="radio" name="Q2" class="rating" id="rating2" value="average">average
            <input type="radio" name="Q2" class="rating" id="rating3" value="poor">poor
            
        </div>
        <div id="getMore">
            <h2>Please tell us why you choose this  product:</h2>
                <input type='radio' name="Q3" value="good quality">good quality<br/>
                <input type='radio' name="Q3" value="reasonable price">reasonable price<br/>
                <input type='radio' name="Q3" value="availability is good">availability is good<br/>
                <h2>user name?</h2>
                <p><input type="text" name="Q4" /><p>
            <div id = "submit"><input type='submit' name="submit" value="Submit" /></div>
        </div>
        </form>
        <div id="thankYou">
            Thanks for your feedback!
        </div>

</body>
</html>