<?php
namespace Php;
//error_reporting(0);
session_start();
use \Php\Member; 

include 'dbconnect.php';
if (! empty($_SESSION["userId"])) {
    require_once __DIR__ . '/class/Member.php';
    $member = new Member();
    $memberResult = $member->getMemberById($_SESSION["userId"]);
    if(!empty($memberResult[0]["display_name"])) {
        $username = $memberResult[0]["user_name"];
        $points = ucwords($memberResult[0]["points"]);
        $chart_data = $memberResult[0]["chart_data"];
        $profile_pic = $memberResult[0]["filename"];
    } else {
        $username = $memberResult[0]["user_name"];
        $points = $memberResult[0]["points"];
        $chart_data = $memberResult[0]["chart_data"];
                $profile_pic = $memberResult[0]["filename"];
    }
}
if($_SERVER["REQUEST_METHOD"] == "POST") {
   $suggest = $_POST["suggest"];
   $sql = "Select * from registered_users where user_name='$username'";
   $result = mysqli_query($conn, $sql);
   $num = mysqli_num_rows($result);
   if($num == 0) {
      if(($password == $cpassword) && $exists==false) {
         $sql = "INSERT INTO `registered_users` ( `user_name`,`suggest`)
         VALUES ('$username', '$suggest')";
         $result = mysqli_query($conn, $sql);
         if ($result) {
            $showAlert = true;}
      }
}
if($suggest != "")//not empty
{
   $sql = "UPDATE registered_users SET points=points+8 where user_name = '$username';";
   $result = mysqli_query($conn, $sql); 
}


if($suggest != "")//not empty
{
   $sql = "UPDATE registered_users SET points=points+8 where user_name = '$username';";
   $result = mysqli_query($conn, $sql); 
}


}
echo $chart_data ;
$chart_data = substr($chart_data, 2);
$chart_data .="80";
echo $chart_data ;



?>  