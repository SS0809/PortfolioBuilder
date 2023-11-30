<?php
namespace Php;
error_reporting(0);
session_start();
    date_default_timezone_set('Asia/Kolkata');
    $t=time()+ (5.5*0*0);
include "./dbconnect.php";

include "preload.php";
use \Php\Member;
  if(""!=$new){
function ne()
{echo '<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script><div class="alert alert-success" role="alert"> <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> --> <strong>Success!</strong> You have been signed in successfully!</div><style>@import "compass/css3";body{  padding: 20px;  }</style><script>  window.setTimeout(function() {    $(".alert").fadeTo(500, 0).slideUp(500, function(){        $(this).remove();     });  }, 2000);</script>';
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
        $timestampp = $memberResult[0]["timestampp"];     
        $lasttime = $memberResult[0]["lasttime"];  
        $streak = $memberResult[0]["streak"];  
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
        $timestampp = $memberResult[0]["timestampp"];
        $lasttime = $memberResult[0]["lasttime"];
        $streak = $memberResult[0]["streak"];    
    }
if($_SERVER["REQUEST_METHOD"] == "POST") 
{
  $pay_o = $_POST["pay_o"];
   $sql = "UPDATE registered_users SET pay = '$pay_o' where user_name = '$username';";
      $result = mysqli_query($conn, $sql); 
}
$timestampp = date($t);
 $sql = "UPDATE registered_users SET timestampp='$timestampp' where user_name = '$username';";
   $result = mysqli_query($conn, $sql); 
//----------------------------------------------------------------------------------------------------------------
$t1 = $lasttime;//last time
if ($t > $t1+ (23*60*60)) {
   //echo "<br><br><br><br><br><br><br><br><br>"."break streak";
$sql = "UPDATE registered_users SET streak = 0 where user_name = '$username';";
      $result = mysqli_query($conn, $sql); 
$sql = "UPDATE registered_users SET lasttime = '$t' where user_name = '$username';";
     $result = mysqli_query($conn, $sql); 

}
else if ($t > $t1+ (11*60*60)) 
{
   //echo "<br><br><br><br><br><br><br><br><br>"."increase";
   //update kal k time in database
  $sql = "UPDATE registered_users SET streak = streak+1 where user_name = '$username';";
    $result = mysqli_query($conn, $sql); 
$sql = "UPDATE registered_users SET lasttime = '$t' where user_name = '$username';";
        $result = mysqli_query($conn, $sql); 

}
else 
{
   //echo "<br><br><br><br><br><br><br><br><br>"."nothing";
}

//----------------------------------------------------------------------------------------------------------------
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
<br><br><br><br>
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
   background-image: linear-gradient(120deg,  black, #1C2A3D);
  style=" font-weight: 800;"
}
  /* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}
/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}
/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: grey;
  -webkit-transition: .4s;
  transition: .4s;
}
.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .2s;
  transition: .2s;
}
input:checked + .slider {
  background-color: blueviolet;
}
input:focus + .slider {
  box-shadow: 0 0 1px blueviolet;
}
input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}
/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}
.slider.round:before {
  border-radius: 50%;
}content: "h";
  </style>

<script>function putStatus() {
    $.ajax({
        type: "GET",
        url: "view/iindex.php",
        data: {toggle_select: true},
        success: function (result) {
            if (result == 1) {
                $('#customSwitch1').prop('checked', true);
                statusText(1);
            } else {
                $('#customSwitch1').prop('checked', false);
                statusText(0);
            }
            lastUpdated();
        }
    });
}

function statusText(status_val) {
    if (status_val == 1) {
        var status_str = "On (1)";
    } else {
        var status_str = "Off (0)";
    }
    document.getElementById("statusText").innerText = status_str;
}

function onToggle() {
    $('#toggleForm :checkbox').change(function () {
        if (this.checked) {
            //alert('checked');
            updateStatus(1);
            statusText(1);
        } else {
            //alert('NOT checked');
            updateStatus(0);
            statusText(0);
        }
    });
}

function updateStatus(status_val) {
    $.ajax({
        type: "POST",
        url: "view/iindex.php",
        data: {toggle_update: true, status: status_val},
        success: function (result) {
            console.log(result);
            lastUpdated();
        }
    });
}

function lastUpdated() {
    $.ajax({
        type: "GET",
        url: "view/iindex.php",
        data: {toggle_updated: true},
        success: function (result) {
            document.getElementById("updatedAt").innerText = "Last updated at: " + result;
        }
    });
}

$(document).ready(function () {
    //Called on page load:
    putStatus();
    onToggle();
    statusText();
});
</script>
<div>
<div class="container">
  <div class="row">
    <div class="col-6 col-md-4">
    <div>
            <img src='<?php echo $profile_pic; ?>' style="width:100px;  object-fit: cover;">
        </div> 
    </div>
    <div class="col-md-8">
      <h6>  	
<div>Name : <b style="color:white;"><?php
 echo $displayname;
if ($points > "100" && $points < "999" ){echo " 1&#9734;";}
else if ($points > "1000" && $points < "1999"){echo " 2&#9734;";}
else if ($points > "2000" && $points < "2999"){echo " 3&#9734;";}
else if ($points > "3000" && $points < "3999"){echo " 4&#9734;";}
  ?></b></div>
<div>Username : <b style="color:white;"><?php echo $username; ?></b></div>
<!--<div>Timestamp : <b style="color:white;">
    <?php 
/*$timestampp = date("H:i:s (d-m-Y)",$timestampp);
echo $timestampp;*/
?> 
</b></div>-->
<div>Email : <b style="color:white;"><?php echo $email;?></b></div>
  <?php

if ($sudo == "1" ){/*echo '<div class="member-dashboard">Payment :  Rs. <b style="color:white;">'. $points*0.035;*/}
?></b>
<div>Points : <b style="color:white;"><?php echo $points;
if ($points <= "5" ){echo "(default)";}?></b></div>
  <!--<div style="float:right;font-size:.6em">Last Active : 0 mins ago</div>--> 
<div>Streak : <b style="color:white;"><?php 
echo $streak."<img src='https://emojipedia-us.s3.amazonaws.com/source/noto-emoji-animations/344/fire_1f525.gif' style='width: 8%;'>";

?></b></div>
</div>
  </h6>
</div>
    <hr>
<?php ne(); ?>
</div>
</div>
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
<br><br><!--
     Enter 1 to serve your web && 0 to not 
      <form id="myForm" action="#" method="post">
    <input type="input" id="pay_o" name="pay_o" value="0 or 1">
   <input class="btn btn-danger me-1" type="submit" name="login" value="Done"
                        class="btnLogin">
    </form>-->
    <!-- Rounded switch -->
<form method="post" id="toggleForm">
          <fieldset>
<h5>PORTFOLIO AVAILABILITY </h5>
<label class="switch">    
<input type="checkbox" class="custom-control-input" id="customSwitch1" name='machine_state'>
<span class="slider round">
  </span>
</label>
<div class="custom-control custom-switch">
<label class="custom-control-label" id="statusText" for="customSwitch1"></label>
              </div>
            </form>
<a href="https://ss0809.github.io/PortfolioBuilder/pages?a=<?php echo $username; ?>" target="_blank" class="btn btn-success me-1" role="button">OPEN</a>
<a href="/view/info.php" target="_blank" class="btn btn-success me-1" role="button">EDIT</a><br>
Copy the following text and share it in your bio {your portfolio}<br>
 <input type="" value="https://ss0809.github.io/PortfolioBuilder/pages?a=<?php echo $username; ?>" id="myInput">
   <button class="btn btn-info me-1" onclick="myFunction()">COPY</button><br>
Copy the following text and share with friends ..... with each friend you get 50 points<br>
<input type="" value="https://server0809.herokuapp.com/signup.php?suggest=<?php echo $username; ?>" id="myInput">
<button class="btn btn-info me-1" onclick="myFunction()">COPY</button><br>
        </div>
    </div>
</div>
<?php /*if ($sudo == "1" ){ include "chart.php"; }*/?>
<br><br><br><br><br><br><br>
<?php include_once("footer.html") ?>
    <script src="./view/assets/dist/js/bootstrap.bundle.min.js"></script>      
 </body>
</html>
