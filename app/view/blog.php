<?php
namespace Php;
error_reporting(0);
session_start();
 include './dbconnect.php';
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
   </script>  
<style type="text/css">
     h4 {
    margin:0px;
}
body {
color:orange;
  background-color: black;
  style=" font-weight: 800;"
}
</style>

<br><br><br><br>
<body>
  <br><br>  <br><h3>BLOGS</h3><br>
  <div class="container">
 <?php $sql = "SELECT * FROM `blogs`" ;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
echo '<b>'.ucwords($row["blogname"]).'</b><div style="text-align:right"> (by '.$row["user_name"].')</div><div style="text-align:right"><small>'.$row["time"].'</small></div>';
echo '<div class="col"><hr>'.$row["content"].'<hr></div><br>';
}}
?> 

</div>
<?php /*if ($sudo == "1" ){ include "chart.php"; }*/?>
<br><br><br><br><br><br><br>
<?php include_once("footer.html") ?>

    <script src="./view/assets/dist/js/bootstrap.bundle.min.js"></script>      
 </body>
</html>
