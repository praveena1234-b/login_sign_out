<html>
<body>
<form method='post' >
<table>
  <tr>
    <th>1stqn</th>
    <th>2ndqn</th>
  <th>3rdqn</th>
  <th>4thqn</th>
  </tr>
  
<?php
include ( "registration.php");
$userdata=new DB_con();

$sql=$userdata->fetchdata();
while($row = mysqli_fetch_row($sql)){
    echo"
  <tr>
    <td>$row[0]</td>
  <td>$row[1]</td>
    <td>$row[2]</td>
  <td>$row[3]</td>
  </tr>";
  }
?>  
</table>
</body>
</html>
  