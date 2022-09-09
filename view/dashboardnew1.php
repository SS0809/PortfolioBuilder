<?php
namespace Php;
error_reporting(0);
session_start();
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
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PROXY</title>
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

<main>
<br><br><br>
  <div class="container marketing">
    <div class="dashboard">   
    <!-- Three columns of text below the carousel -->
    <div class="row">
      <center><div class="col-lg-4">
       <img src="<?php echo $profile_pic; ?>" width="50%" height="50%">
<div>
      <h6>        
<div class="member-dashboard">Name : <b><?php echo $displayname; ?></b></div>
<div class="member-dashboard">Username : <b><?php echo $username; ?></b></div>
<div class="member-dashboard">Email : <b><?php echo $email;?></b></div>

  <?php

if ($sudo == "1" ){echo '<div class="member-dashboard">Payment :  Rs. <br>'. $points*0.06;}

?>

</b></div><?php ne(); ?>
<div class="member-dashboard">Points : <b><?php echo $points;
if ($points <= "5" ){echo "(default)";}?></b></div><br><br>
Copy the following text and share with friends ..... with each friend you get 50 points
<input type="" value="https://server0809.herokuapp.com/signup.php?suggest=<?php echo $username; ?>" id="myInput">
<button onclick="myFunction()">SHARE</button>
        </div>
  </h6>
    </div>
      </div><!-- /.col-lg-4 --></center>
    </div><!-- /.row -->
  </div><!-- /.container -->
</main>
<?php if ($sudo == "1" ){ include "chart.php"; }?>
<?php include_once("footer.html") ?>

    <script src="./view/assets/dist/js/bootstrap.bundle.min.js"></script>      
 </body>
</html>
