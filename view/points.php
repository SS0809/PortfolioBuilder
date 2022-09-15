<?php
namespace Php;
//error_reporting(0);
session_start();
use \Php\Member; 
include '../dbconnect.php';
$userbrowser;
if (! empty($_SESSION["userId"])) {
    require_once __DIR__ . './../class/Member.php';
    $member = new Member();
    $memberResult = $member->getMemberById($_SESSION["userId"]);
    if(!empty($memberResult[0]["display_name"])) {
        $username = $memberResult[0]["user_name"];
        $user_browser = $memberResult[0]["user_browser"];
        $points = ucwords($memberResult[0]["points"]);
        $pointa = $memberResult[0]["pointa"];
        $pointb = $memberResult[0]["pointb"];
        $sudo = $memberResult[0]["sudo"];
          $lastpoint = $memberResult[0]["lastpoint"];
        $profile_pic = $memberResult[0]["filename"];
    } else {
        $username = $memberResult[0]["user_name"];
        $user_browser = $memberResult[0]["user_browser"];
        $points = $memberResult[0]["points"];
        $pointa = $memberResult[0]["pointa"];
        $pointb = $memberResult[0]["pointb"];
        $sudo = $memberResult[0]["sudo"];
          $lastpoint = $memberResult[0]["lastpoint"];
          $profile_pic = $memberResult[0]["filename"];
    }
if ( $userbrowser == "")
{

$array = array($_SERVER['HTTP_USER_AGENT']);
$current= $_SERVER['HTTP_USER_AGENT'];


    echo "yes first";
    $serialized_array = serialize($array); 
   $sql = "UPDATE registered_users SET user_browser='$serialized_array' where user_name = '$username';";
   $result = mysqli_query($conn, $sql); 
       if ($pointa==""&&$pointb=="") {
    echo "yes sudo";
    echo $current;
        }
        else
        {
        echo "no sudo";
   header("Location: ./not.html");
      die();
        echo $current;
        }
}
else
{
$current= $_SERVER['HTTP_USER_AGENT'];
$unserialized_array = unserialize($userbrowser); 
$last = end($unserialized_array);


if( array_search($current,$unserialized_array)===false)
{
    array_push($unserialized_array,$current);
    $serialized_array = serialize($unserialized_array); 
  $sql = "UPDATE registered_users SET user_browser='$serialized_array' where user_name = '$username';";
   $result = mysqli_query($conn, $sql); 
    echo "yes different";
    echo $current;
}
else
{
    if ($pointa=="0"&&$pointb=="0") {
    echo "yes sudo";
    echo $current;
        }
        else
        {
        echo "no sudo";
   header("Location: ./not.html");
      die();
        echo $current;
        }
}
}


}
if($sudo == 1) {          
    
}
 else {   
   header("Location: ./not.html");
      die();
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
		'key' : '4ffd6b58ad7e80b4ddc48329052439ae',
		'format' : 'iframe',
		'height' : 50,
		'width' : 320,
		'params' : {}
	};
	document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://crossroadparalysisnutshell.com/4ffd6b58ad7e80b4ddc48329052439ae/invoke.js"></scr' + 'ipt>');
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
<h1 style="color:red">DO NOT USE SERVER TWICE IN A DEVICE<small>(mobile)</small></h1>
    <div style="text-align: center;">
START CLICKING ADS ... AND EARN POINTS<small>(series of 46*10)</small><br>
    <button style="background: rgb(54, 182, 0); border-radius: 3px; border: transparent; box-shadow: rgb(68, 68, 68) 2px 2px 2px; color: white; font-family: Roboto, sans-serif; font-size: 20px; font-weight: 600; padding: 13px; text-decoration: none;" onclick="location.href = '<?php 
    if($lastpoint!="")

        {echo $lastpoint;
}
else
    {echo "/view/super.php?page=1?cc=1";}
?>';">Generate Tokenizer</button>

</div><br>

</div>
<?php include_once("footer.html") ?>
</body>
</html>
