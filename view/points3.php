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
}}
include '../dbconnect.php';
?>  
<!DOCTYPE html>
<html>

<head>
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
  <!--BOOTSTRAP-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!--BOOTSTRAP-->
</head>

<body>
  <br><br><br>
  <h1>PAGE A3</h1>
  <!--c0123l123i123c546k123c8l123i45812c3458k123-->
  <h2>click on both</h2>
  <h1>Points ::<a id="clicks">000</a></h1>
  <div class="float-end"><a href="/index.php" class="btn btn-info me-1">Profile</a></div>
  <form id="myForm" action="/view/points4.php?c0123l123i123c546k123c8l123i45812c3458k123=0" method="post">
    <input type="hidden" id="suggest" name="suggest" value="NO">
  </form>
  <br>
  <?php
  
  
include "ads.php";

$temp_link = $linn[3];
$sc= '<script async="async" data-cfasync="false" src="//sixtybirthsuperstition.com/'.$temp_link.'/invoke.js"></script>';
$di= '<div id="container-'.$temp_link.'"></div>';



?>

<?php echo $sc; ?>
 <?php echo $di; ?>

  <div class="avoid-clicks">
    <h2>CLICK AND CLOSE<small>(window)</small></h2>
    <h3>upto 8 cycles then it will automatically redirect you</h3>SECONDS<time><strong id="seconds">1</strong></time>
  </div>
  <script>
    var p = 0;
    const urlParams = new URLSearchParams(location.search);
    let suggest;
    for (const [key, value] of urlParams.entries()) {
      console.log(`${key}, ${value}`);

      if (key == 'c0123l123i123c546k123c8l123i45812c3458k123') {
        suggest = value;
        if (value >= 8) {
          suggest = 0;
          document.getElementById("myForm").submit();

        }
      } else {
        p = value;
      }

    }
    var clic = 0,cli=0;
    const el = document.getElementById('container-<?php echo $temp_link; ?>');
    el.addEventListener('click', function handleClick(event) {
      console.log('element clicked 🎉🎉🎉', event);
         timer();
    });


    function create() {
      window.location = '/view/points3.php?c0123l123i123c546k123c8l123i45812c3458k123=' + suggest;
      console.log("2 success");
    }

    function timer() {
      suggest++;
      console.log(suggest);
      var el = document.getElementById('seconds'),
        total = el.innerHTML,
        timeinterval = setInterval(function () {
          total = --total;
          el.textContent = total;
          if (total <= 0) {
            clearInterval(timeinterval);
            create();
          }
        }, 1000);
    }
    su = document.getElementById('clicks');
    su.textContent = suggest;
  </script>
  <?php include_once("footer.html") ?>
</body>
</html>
