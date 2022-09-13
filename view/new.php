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

if($recieve>0)
{

   $sql = "UPDATE registered_users SET points=points+1 where user_name = '$username';";
   $result = mysqli_query($conn, $sql); 
}
include "ads.php";
$temp_link = $linn[$recieve];
$sc= '<script async="async" data-cfasync="false" src="//sixtybirthsuperstition.com/'.$temp_link.'/invoke.js"></script>';
$di= '<div id="container-'.$temp_link.'"></div>';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
   <?php include_once("a.html") ?>
  <script type="text/javascript">
    var temp = "<?php echo $profile_pic; ?>";
    var pic = document.getElementById("pic");
    pic.setAttribute('src', temp);
    points.setAttribute("href", "points1.php");
    points.setAttribute("class", "nav-link active");
    blogs.setAttribute("href", "../blog/index.html");
    movies.setAttribute("href", "movies.php");
    yt.setAttribute("href", "../yt/index.html");
    upload.setAttribute("href", "./upload2.php");
    logout.setAttribute("href", "/logout.php");
    home.setAttribute("href", "../index.php");
    home.setAttribute("class", "nav-link");
    pic.setAttribute("src", "<?php echo $profile_pic ?>");
  </script>
</head>
<body>
 <!--BOOTSTRAP-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!--BOOTSTRAP-->
</head>
<body>
  <br><br><br>
  <h1>PAGE total 30</h1>
  <!--c0123l123i123c546k123c8l123i45812c3458k123-->
  <h2>TOKEN <?php echo $recieve; ?></h2>
  <h1>Points ::<a id="clicks">000</a></h1>
  <div class="float-end"><a href="/index.php" class="btn btn-info me-1">Profile</a></div>
  <form id="myForm" action="/view/new.php?page=<?php   if($recieve==30){echo "1";}else{echo $recieve+1;}?>" method="post">
    <input type="hidden" id="suggest" name="suggest" value="NO">
  </form>
  <br>
<?php echo $sc;  echo $di; include "searchparam.php";?>
    function create() {
      window.location = '/view/new.php?page=' + <?php if($recieve==30){echo "1";}else{echo $recieve+1;}?>;
      console.log("2 success");
    }
 <?php include "redirector.php";?>
  </script>
   <?php include_once("footer.html") ?>
</body>
</html>
