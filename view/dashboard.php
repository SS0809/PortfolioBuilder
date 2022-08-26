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
        $username = ucwords($memberResult[0]["user_name"]);
        $email = ucwords($memberResult[0]["email"]);
        $points = ucwords($memberResult[0]["points"]);
        $profile_pic = ucwords($memberResult[0]["filename"]);
               
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
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SERVER</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--BOOTSTRAP-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!--BOOTSTRAP-->
  <script>
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
</head>
<body>
<div class="float-end"><a href="./blog/index.html" class="btn btn-info me-1">BLOGS</a></div>
<div class="float-end"><a href="./view/movies.php" class="btn btn-info me-1">Movies</a></div>
<div class="float-end"><a href="../yt/index.php" class="btn btn-info me-1">Youtube Converter</a></div>
<div class="float-start"><a href="./logout.php" class="btn btn-danger me-1">Logout</a></div>
<div class="float-start"><a href="./view/upload.php" class="btn btn-danger me-1">Upload</a></div>
<br><br>
<div>
      <h3>
          <div class="dashboard">
            <div class="member-dashboard">Welcome <b><?php echo $displayname; ?></b>, You have successfully logged in!<br>
            </div>
            <img src="./image/<?php echo $profile_pic; ?>"  width="10%">
<div class="member-dashboard">Name : <b><?php echo $displayname; ?></b></div>
<div class="member-dashboard">Username : <b><?php echo $username; ?></b></div>
<div class="member-dashboard">Email : <b><?php echo $email;?></b></div>
<div class="member-dashboard">Points : <b><?php echo $points;
if ($points <= "5" ){echo "(default)";}?></b></div><br><br>
<h3>Copy the following text and share with friends ..... with each friend you get 5 points</h3>
<input type="" value="https://server0809.herokuapp.com/signup.php?suggest=<?php echo $username; ?>" id="myInput">
<button onclick="myFunction()">SHARE</button>
        </div>
  </h3>
    </div>
  <br>
 <!--<a href = "/server/refer.html?url=/server/refer2.html?url2=cdn-s.blogspot.com/2022/08/kgf-2.html">REFER</a>-->
<div class="footer">
  <p>SERVER</p>
</div>
<div class="float-start"><a href="./pp/index.html" class="btn btn-info me-1">TERM OF SERVICE</a></div>
<div class="float-start"><a href="./aus/index.html" class="btn btn-info me-1">About Us</a></div>
<div class="float-start"><a href="./tos/index.html" class="btn btn-info me-1">PRIVACY POLICY</a></div>
</body>
</html>