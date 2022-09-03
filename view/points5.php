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
  <h1>28 COMPLETED</h1>
  <!--c0123l123i123c546k123c8l123i45812c3458k123-->
  <h2>EARN POINTS</h2>
  <h1>Points ::<a id="clicks">000</a></h1>
  <div class="float-end"><a href="/index.php" class="btn btn-info me-1">Profile</a></div>
  <form id="myForm" action="/view/points6.php?c0123l123i123c546k123c8l123i45812c3458k123=0" method="post">
    <input type="hidden" id="suggest" name="suggest" value="NO">
  </form>
  <br>
  <?php
  
  
  $linn = array(
"f0ac4c43a4f5d1b9350bade78235892",
"f0ac4c43a4f5d1b9350bade78235892a",
"352602af1b204a99db8839c2755af225",
"a6359a1d6d37486f74d0d3907a1bc83a",
"ad9a63ece1ec68cea2edad61aae602a9",
"d9ba3583b86d7eb874be137418338203",
"9c3b8ff5a4bb56c51876db0c6a8ec0c3",
"355b16195dcb79d6f8cbdf4b5b0dfc32",
"4c667ca9832260e129d67681a0c061ba",
"b8315d207c617c3cf18581cd9f88e6f1",
"186869af02be17f445ecdc04c6a5154a",
"589ef0a4568d9bf47288d471dd42a400",
"5c93bc162b0807246af3a409477d06a7",
"1890edf1c9a79e2d5c416f8ea6a00f7f",
"38be2414ba14a841359b2fc3d242a3a2"
  );

$temp_link = $linn[5];
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
    const el = document.getElementById('container-<?php echo $temp_link; ?>');
    el.addEventListener('click', function handleClick(event) {
      console.log('element clicked 🎉🎉🎉', event);
      timer();
    });

    function create() {

      window.location = '/view/points5.php?c0123l123i123c546k123c8l123i45812c3458k123=' + suggest;
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