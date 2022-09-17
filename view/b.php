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
        $profile_pic = $memberResult[0]["filename"];
    } else {
        $username = $memberResult[0]["user_name"];
        $points = $memberResult[0]["points"];
                $profile_pic = $memberResult[0]["filename"];
    }

}
   //if(isset($_SERVER['HTTPS']) )   
    $url= $_SERVER['REQUEST_URI'];    
  $recieve = parse_url($url, PHP_URL_QUERY);  
$recieve = substr($recieve, 5);
$recieve = substr($recieve, 0, strpos($recieve, "?cc"));
if($_SERVER["REQUEST_METHOD"] == "POST") {
     $suggest = $_POST["suggest"];
    $sql = "UPDATE registered_users SET points=points+1 , lastpoint = '$suggest' where user_name = '$username';";
   $result = mysqli_query($conn, $sql); 
}
include "ads.php";
$temp_link = $linn[$recieve];
$sc= '<script async="async" data-cfasync="false" src="//sixtybirthsuperstition.com/'.$temp_link.'/invoke.js"></script>';
$di= '<div id="container-'.$temp_link.'"></div>';
?><!DOCTYPE html>
<html>

<body>
 <!--BOOTSTRAP-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!--BOOTSTRAP-->
</head>
<body>
  <h4>TOTAL POINTS <?php echo $points; ?></h4>
  <h4>Points ::<a id="clicks">000</a></h4>
  <div class="float-end"><a href="/index.php" class="btn btn-info me-1">Profile</a></div>
<?php echo $temp_link  ;?>

  <!--<div class="avoid-clicks">
    <h2>CLICK AND CLOSE<small>(window)</small></h2>
    <h3>upto 8 cycles then it will automatically redirect you</h3>SECONDS<time><strong id="seconds">0</strong></time>
  </div>-->
 
</body>
</html>