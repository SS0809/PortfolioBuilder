<?php
namespace Php;
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
    } else {
        $username = $memberResult[0]["user_name"];
        $points = $memberResult[0]["points"];
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
   $sql = "UPDATE registered_users SET points=points+1 where user_name = '$username';";
   $result = mysqli_query($conn, $sql); 
}}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
  </head>
<body>
<h2>EARN POINTS</h2>
<br>
<div class="float-end"><a href="/index.php" class="btn btn-info me-1">Profile</a></div>
<h2>Click on the IMAGE and close the tab/window and come back you will get 1 point</h2>
<form id="myForm" action="points.php" method="post">
        <input type="hidden" id="suggest"
         name="suggest" value ="NO">   
</form>
<script async="async" data-cfasync="false" src="//sixtybirthsuperstition.com/a6359a1d6d37486f74d0d3907a1bc83a/invoke.js"></script>
<div id="container-a6359a1d6d37486f74d0d3907a1bc83a"></div>
<script>
const el = document.getElementById('container-a6359a1d6d37486f74d0d3907a1bc83a');
el.addEventListener('click', function handleClick(event) {
  console.log('element clicked 🎉🎉🎉', event);
  create();
});
function create (){
var button = document.createElement("button");
button.innerHTML = "GO";
var body = document.getElementsByTagName("body")[0];
body.appendChild(button);
button.addEventListener ("click", function() {
      //window.location='#';
      document.getElementById("myForm").submit();
});
}
</script>
<h3>check your points in profile tab</h3>
</body> 
</html>