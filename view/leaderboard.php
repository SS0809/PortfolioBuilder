<?php
namespace Php;?>
<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body> <a class="nav-link active" id = "home"  aria-current="page" href="/index.php">Home</a>
	<h2>TOP SUBXSUB USERS</h2>
<table style="width:100%">
  <tr>
    <th>Username</th>
    <th>Points</th>
     <th>Rank</th>
    <th>Payment</th>
    <th>Portfolio</th>
  </tr>
  <?php
//error_reporting(0);
session_start();
use \Php\Member; 
include '../dbconnect.php';
if (! empty($_SESSION["userId"])) {
    require_once __DIR__ . './../class/Member.php';
    $member = new Member();
    $memberResult = $member->getMemberById($_SESSION["userId"]);
    if(!empty($memberResult[0]["display_name"])) {
        $username = $memberResult[0]["user_name"];
        $points = ucwords($memberResult[0]["points"]);
         $sudo = ucwords($memberResult[0]["sudo"]);
        $profile_pic = $memberResult[0]["filename"];
    } else {
        $username = $memberResult[0]["user_name"];
        $points = $memberResult[0]["points"];
         $sudo = $memberResult[0]["sudo"];
                $profile_pic = $memberResult[0]["filename"];
    }
}
if($sudo == 1) {          
    
}
 else {   
   header("Location: ./not.html");
      die();
}
include '../dbconnect.php';
$sql = "SELECT user_name,points,pay FROM `registered_users` WHERE points > 5 ORDER BY `registered_users`.`points` DESC limit 15";
$total = 0;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo $row["user_name"]. " ---------- ". $row["points"]. "<br>";
    $total += $row["points"]; 
     if ($row["pay"]==1) {
        $check = "ON"; 
       }
       else
       {
         $check = "OFF"; 
       }


      if ($row["points"]>100) {
        $rank = "1&#9734;"; 
        if ($row["points"]>500)
       {
         $rank = "2&#9734;"; 
       }}
       else 
       {
         $rank = "LOSER"; 
       }
       echo '<tr><td>'.$row["user_name"].'</td>'. '<td>'.$row["points"].'</td>'. '<td>'.$rank.'</td>'. '<td>Rs.'.$row["points"]*0.05.'</td>'. '<td>'.$check.'</td>'. "<br>";
     
  }
  echo "Total money in server RS:: ".$total*0.05;
} else {
  echo "0 results";
}
$conn->close();
?>
  </tr>
</table>
</body>
</html>
