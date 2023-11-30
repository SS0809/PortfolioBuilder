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
?>
<!DOCTYPE html>
<html>
<body>
  <h4>TOTAL POINTS <?php echo $points; ?></h4>
<div id="demo">
<h1>The XMLHttpRequest Object</h1>
<button type="button" onclick="loadDoc()">Change Content</button>
</div>
<div id="abc"></div>
<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var abc =
      this.responseText;
      document.getElementById("abc").id = abc;
    }
  };
  xhttp.open("GET", "b.php?page=32?cc=4", true);
  xhttp.send();
}

document.write('<script async="async" data-cfasync="false" src="//sixtybirthsuperstition.com//invoke.js"></sc'+'ript>');
</script>

</body>
</html>
