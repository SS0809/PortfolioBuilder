<?php
namespace Php;?>
<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>
	<h2>TOP 5 USERS</h2>
<table style="width:100%">
  <tr>
    <th>Username</th>
    <th>Points</th>
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
$sql = "SELECT user_name,points FROM `registered_users` ORDER BY `registered_users`.`points` DESC limit 5";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo $row["user_name"]. " ---------- ". $row["points"]. "<br>";
       echo '<tr><td>'.$row["user_name"].'</td>'. '<td>'.$row["points"].'</td>'. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
  </tr>
</table>
</body>
</html>