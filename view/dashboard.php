<?php
namespace Phppot;
use \Phppot\Member;
if (! empty($_SESSION["userId"])) {
    require_once __DIR__ . './../class/Member.php';
    $member = new Member();
    $memberResult = $member->getMemberById($_SESSION["userId"]);
    if(!empty($memberResult[0]["display_name"])) {
        $displayName = ucwords($memberResult[0]["display_name"]);
    } else {
        $displayName = $memberResult[0]["user_name"];
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
  <!--AJAX-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!--AJAX-->
  <!--AJAX--loader-->
  <script>

    function loader(num){
       $(document).ready(function(){
       
       $('#content').load("pages/"+num+".html");
    
    });
    }
     </script>
<!--AJAX--loader-->
</head>
<body>
<div>
      <h2>
          <div class="dashboard">
            <div class="member-dashboard">Welcome <b><?php echo $displayName; ?></b>, You have successfully logged in!<br>
            </div>
        </div>
  </h2>
    </div>
<div class="container mt-3">
  <button  type="button" class="btn btn-success" onclick = "loader('01')">01</button>
  <button  type="button" class="btn btn-success" onclick = "loader('02')">02</button>
  <button  type="button" class="btn btn-success" onclick = "loader('03')">03</button>
  <button  type="button" class="btn btn-success" onclick = "loader('04')">04</button>
  <button  type="button" class="btn btn-success" onclick = "loader('05')">05</button>
  <br>
    <div id="content">
      <h1>WELCOME TO THE SERVER</h1>
    </div>
</div>
<br>
Click to <a href="./logout.php" class="logout-button">Logout</a>
 <!--<a href = "/server/refer.html?url=/server/refer2.html?url2=cdn-s.blogspot.com/2022/08/kgf-2.html">REFER</a>-->
<div class="footer">
  <p>SERVER</p>
</div>
</body>
</html>