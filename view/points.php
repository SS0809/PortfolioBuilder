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
<body><br><br><br><br><br>
<script type="text/javascript">
	atOptions = {
		'key' : 'a6398f835dff65287d0eb1d1c88c07cb',
		'format' : 'iframe',
		'height' : 250,
		'width' : 300,
		'params' : {}
	};
	document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://crossroadparalysisnutshell.com/a6398f835dff65287d0eb1d1c88c07cb/invoke.js"></scr' + 'ipt>');
</script>
<script type="text/javascript">
              var temp = "<?php echo $profile_pic; ?>";
         var pic = document.getElementById("pic");
        pic.setAttribute('src', temp);
        points.setAttribute("href", "points.php");
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
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!--BOOTSTRAP-->
  </head>
<body>
<br><br><br /><br />
    <div style="text-align: center;">
START CLICKING ADS ... AND EARN POINTS IN EVERY 10 POINTS YOU ARE NOTIFIED<br>
    <button style="background: rgb(54, 182, 0); border-radius: 3px; border: transparent; box-shadow: rgb(68, 68, 68) 2px 2px 2px; color: white; font-family: Roboto, sans-serif; font-size: 20px; font-weight: 600; padding: 13px; text-decoration: none;"><a href="/view/points1.php?c0123l123i123c546k123c8l123i45812c3458k123=0">START</a></button>
    <!--    <button style="background: rgb(54, 182, 0); border-radius: 3px; border: transparent; box-shadow: rgb(68, 68, 68) 2px 2px 2px; color: white; font-family: Roboto, sans-serif; font-size: 20px; font-weight: 600; padding: 13px; text-decoration: none;"><a href="/view/points2.php?c0123l123i123c546k123c8l123i45812c3458k123=0">SERVER 2</a></button>
            <button style="background: rgb(54, 182, 0); border-radius: 3px; border: transparent; box-shadow: rgb(68, 68, 68) 2px 2px 2px; color: white; font-family: Roboto, sans-serif; font-size: 20px; font-weight: 600; padding: 13px; text-decoration: none;"><a href="/view/points3.php?c0123l123i123c546k123c8l123i45812c3458k123=0">SERVER 3</a></button>-->
</div>
<?php include_once("footer.html") ?>
</body>
</html>