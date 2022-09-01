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
   $sql = "UPDATE registered_users SET points=points+10 where user_name = '$username';";
   $result = mysqli_query($conn, $sql); 
}}
?>
<!DOCTYPE html>
<html>
<head>
<?php include_once("a.html") ?>
</head>
<body>
  <br><br>  <h1>50 COMPLETED</h1>
  SECONDS<time><strong id="seconds">2</strong></time><br>
<script type="text/javascript">
              var temp = "<?php echo $profile_pic; ?>";
         var pic = document.getElementById("pic");
        pic.setAttribute('src', temp);
        points.setAttribute("href", "points5.php");
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  </head>
<body>
<form id="myForm" action="points6.php" method="post">
        <input type="hidden" id="suggest"
         name="suggest" value ="NO">   
</form>
<script>
        const urlParams = new URLSearchParams(location.search);
        let suggest ;
        for (const [key,value] of urlParams) {
             if (key == 'c0123l123i123c546k123c8l123i45812c3458k123'){suggest = value ; 
            if (value>=10) {
 suggest = 0;
 //alert("10 completed");
   document.getElementById("myForm").submit();

             }
             }              
        }
          function timer()
    { 
var el = document.getElementById('seconds'),
    total = el.innerHTML,
    timeinterval = setInterval(function () {
        total = --total;
        el.textContent = total;
        if (total <= 0) {
            clearInterval(timeinterval);
                  window.location='/index.php';
        }
    }, 2000);
}
timer();
</script>

<?php include_once("footer.html") ?>
</body>
</html>
