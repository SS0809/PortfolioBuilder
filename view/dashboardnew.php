<?php
namespace Php;
error_reporting(0);
session_start();
use \Php\Member;
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
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
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
<!--
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Example headline.</h1>
            <p>Some representative placeholder content for the first slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption">
            <h1>Another example headline.</h1>
            <p>Some representative placeholder content for the second slide of the carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>One more for good measure.</h1>
            <p>Some representative placeholder content for the third slide of this carousel.</p>
            <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
-->
<br><br><br>
  <div class="container marketing">
    <div class="dashboard">
            <div class="member-dashboard">Welcome <b><?php echo $displayname; ?></b>, You have successfully logged in!<br>
            </div>
    <!-- Three columns of text below the carousel -->
    <div class="row">
      <center><div class="col-lg-4">
       <img src="<?php echo $profile_pic; ?>" width="50%" height="50%">
<div>
      <h6>        
<div class="member-dashboard">Name : <b><?php echo $displayname; ?></b></div>
<div class="member-dashboard">Username : <b><?php echo $username; ?></b></div>
<div class="member-dashboard">Email : <b><?php echo $email;?></b></div>
<div class="member-dashboard">Payment :  $ <b>
  <?php
if ($sudo == "1" ){echo $points*0.0006;}

?>

</b></div>
<div class="member-dashboard">Points : <b><?php echo $points;
if ($points <= "5" ){echo "(default)";}?></b></div><br><br>
Copy the following text and share with friends ..... with each friend you get 5 points
<input type="" value="https://server0809.herokuapp.com/signup.php?suggest=<?php echo $username; ?>" id="myInput">
<button onclick="myFunction()">SHARE</button>
        </div>
  </h6>
    </div>
      </div><!-- /.col-lg-4 --></center>
    </div><!-- /.row -->
  </div><!-- /.container -->
</main>
<?php include_once("footer.html") ?>
    <script src="./view/assets/dist/js/bootstrap.bundle.min.js"></script>      
  </body>
</html>
