<?php
namespace Php;
error_reporting(0);
session_start();
    $servername = "remotemysql.com";
    $username = "IIVAjfeDkk";
    $password = "zzrye8TbMy";
    $database = "IIVAjfeDkk";
    $conn = mysqli_connect($servername,
        $username, $password, $database);

    if($conn) {
    //  echo "success";
    }
    else {
        die("Error". mysqli_connect_error());
}
include "preload.php";
use \Php\Member;
  if(""!=$new){
function ne()
{echo '<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script><div class="alert alert-success" role="alert"> <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> --> <strong>Success!</strong> You have been signed in successfully!</div><style>@import "compass/css3";body{  padding: 50px;  }</style><script>  window.setTimeout(function() {    $(".alert").fadeTo(500, 0).slideUp(500, function(){        $(this).remove();     });  }, 2000);</script>';
}
     }else{function ne(){}}
if (! empty($_SESSION["userId"])) {
    require_once __DIR__ . './../class/Member.php';
    $member = new Member();
    $memberResult = $member->getMemberById($_SESSION["userId"]);
    if(!empty($memberResult[0]["display_name"])) {
        $displayname = ucwords($memberResult[0]["display_name"]);
        $username = $memberResult[0]["user_name"];
        $email = ucwords($memberResult[0]["email"]);
        $points = ucwords($memberResult[0]["points"]);
        $profile_pic = $memberResult[0]["filename"];
        $sudo = $memberResult[0]["sudo"];
        $chart_data = $memberResult[0]["chart_data"];
        $lastpoint = $memberResult[0]["lastpoint"];      
        // Username is stored as cookie for 10 years as
        // 10years * 365days * 24hrs * 60mins * 60secs
        setcookie("user_login", $name, time() +
        (10 * 365 * 24 * 60 * 60));

// Password is stored as cookie for 10 years as
// 10years * 365days * 24hrs * 60mins * 60secs
setcookie("user_password", $password, time() +
        (10 * 365 * 24 * 60 * 60));

// After setting cookies the session variable will be set
$_SESSION["name"] = $name;

    } else {
        $displayname = $memberResult[0]["display_name"];
        $username = $memberResult[0]["user_name"];
        $email = $memberResult[0]["email"];
        $points = $memberResult[0]["points"];
        $profile_pic = $memberResult[0]["filename"];
        $sudo = $memberResult[0]["sudo"];
        $chart_data = $memberResult[0]["chart_data"];
        $lastpoint = $memberResult[0]["lastpoint"];
    }
if($_SERVER["REQUEST_METHOD"] == "POST") 
{
  $pay_o = $_POST["pay_o"];
   $sql = "UPDATE registered_users SET pay = '$pay_o' where user_name = '$username';";
      $result = mysqli_query($conn, $sql); 
}

}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SUBXSUB</title>
      <!--BOOTSTRAP-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/"> 
<link href="./view/assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="./view/css.css" rel="stylesheet">
    <link href="./view/carousel.css" rel="stylesheet">
  </head>
  <body> 
<?php include_once("a.html") ?>    
<script type="text/javascript">
          var temp = "<?php echo $profile_pic; ?>";
         var pic = document.getElementById("pic");
        pic.setAttribute('src', temp);
    function myFunction() {
  /* Get the text field */
  var copyText = document.getElementById("myInput");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

   /* Copy the text inside the text field */
  navigator.clipboard.writeText(copyText.value);
  navigator.clipboard.writeText(copyText.value);
}</script>  
<style type="text/css">
     .iconDetails {
 margin-left:2%;
float:left; 
height:19%;
width:19%; 
} 

.container2 {
    width:100%;
    height:auto;
    padding:1%;
}

h4 {
    margin:0px;
}
body {
color:orange;
  background-color: black;
  style=" font-weight: 800;"
}
</style>

<br><br>
<div>
        <div>
            <img src='<?php echo $profile_pic; ?>' style="width:100px;  object-fit: cover;">
        </div> 
<br><hr>

      <h6>  	
<div>Name : <b style="color:white;"><?php
 echo $displayname;
if ($points > "100" && $points < "999" ){echo " 1&#9734;";}
else if ($points > "1000" && $points < "1999"){echo " 2&#9734;";}
else if ($points > "2000" && $points < "2999"){echo " 3&#9734;";}
else if ($points > "3000" && $points < "3999"){echo " 4&#9734;";}
  ?></b></div>
<div>Username : <b style="color:white;"><?php echo $username; ?></b></div>
<div>Timestamp : <b style="color:white;">
    <?php 
    date_default_timezone_set('Asia/Kolkata');
    $t=time();

echo ($t . "<br>"); 
echo (date("Y-m-d H:i:s",$t));
?> 
</b></div>
<div>Email : <b style="color:white;"><?php echo $email;?></b></div>
  <?php

if ($sudo == "1" ){/*echo '<div class="member-dashboard">Payment :  Rs. <b style="color:white;">'. $points*0.035;*/}
?></b>
<div>Points : <b style="color:white;"><?php echo $points;
if ($points <= "5" ){echo "(default)";}?></b></div>
  <!--<div style="float:right;font-size:.6em">Last Active : 0 mins ago</div>-->
   
</div>
  </h6>

</div>
    <hr>
<?php ne(); ?>

MAXIMUM POINTS COLLECTED
<div id = "myBar" class="progress-bar progress-bar-striped progress-bar-animated" style="width:0%">ZERO POINTS COLLECTED</div>
<script type="text/javascript">
  var elem = document.getElementById("myBar");    
<?php
if ($lastpoint!="") {
$lastpoint = substr($lastpoint, 21);
$lastpoint = substr($lastpoint, 0, strpos($lastpoint, "?cc"));
}
?> 
 elem.style.width = "<?php if ($lastpoint!="") {echo $lastpoint*2;}else echo "50" ?>%";
elem.textContent = "<?php if ($lastpoint!="") {echo $lastpoint*2;}else echo "ZERO POINTS COLLECTED" ?> %";
</script>
<br><br>
     Enter 1 to serve your web && 0 to not 
      <form id="myForm" action="#" method="post">
    <input type="input" id="pay_o" name="pay_o" value="0 or 1">
   <input class="btn btn-danger me-1" type="submit" name="login" value="Done"
                        class="btnLogin"></form>
<a href="https://subxsub.me/pages?a=<?php echo $username; ?>" target="_blank" class="btn btn-success me-1" role="button">portfolio</a>
<a href="/view/info.php" target="_blank" class="btn btn-success me-1" role="button">EDIT</a><br>
Copy the following text and share it in your bio {your portfolio}<br>
 <input type="" value="https://subxsub.me/pages?a=<?php echo $username; ?>" id="myInput">
   <button class="btn btn-info me-1" onclick="myFunction()">COPY</button><br>
Copy the following text and share with friends ..... with each friend you get 50 points<br>
<input type="" value="https://server0809.herokuapp.com/signup.php?suggest=<?php echo $username; ?>" id="myInput">
<button class="btn btn-info me-1" onclick="myFunction()">COPY</button><br>
        </div>

    </div>

<?php /*if ($sudo == "1" ){ include "chart.php"; }*/?>
<br><br><br><br><br><br><br>
<?php include_once("footer.html") ?>

    <script src="./view/assets/dist/js/bootstrap.bundle.min.js"></script>      
 </body>
</html>
