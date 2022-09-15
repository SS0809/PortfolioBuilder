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
    //if(isset($_SERVER['HTTPS']) )   
    $url= $_SERVER['REQUEST_URI'];    
  $recieve = parse_url($url, PHP_URL_QUERY);  
$recieve = substr($recieve, 5);
$recieve = substr($recieve, 0, strpos($recieve, "?cc"));
if($recieve>0)
{

   $sql = "UPDATE registered_users SET points=points+1 where user_name = '$username';";
   $result = mysqli_query($conn, $sql); 
}
include "ads.php";
$temp_link = $linn[$recieve];
$sc= '<script async="async" data-cfasync="false" src="//sixtybirthsuperstition.com/'.$temp_link.'/invoke.js"></script>';
$di= '<div id="container-'.$temp_link.'"></div>';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
 <!--BOOTSTRAP-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!--BOOTSTRAP-->
</head>
<body>
  <br><br><br>
  <h1>PAGE total 10</h1>
  <!--c0123l123i123c546k123c8l123i45812c3458k123-->
  <h2>TOKEN <?php echo $recieve; ?></h2>
  <h1>Points ::<a id="clicks">000</a></h1>
  <div class="float-end"><a href="/index.php" class="btn btn-info me-1">Profile</a></div>
  <form id="myForm" action="/view/new.php?page=<?php   if($recieve==10){echo '1';}else{echo $recieve+1;}?>" method="post">
    <input type="hidden" id="suggest" name="suggest" value="NO">
  </form>
  <br>
<?php echo $sc;  echo $di;?>
  <div class="avoid-clicks">
    <h2>CLICK AND CLOSE<small>(window)</small></h2>
    <h3>upto 8 cycles then it will automatically redirect you</h3>SECONDS<time><strong id="seconds">0</strong></time>
  </div>
  <script>
  var p = 0;
    const urlParams = new URLSearchParams(location.search);
    let suggest;
    /*
      if (key == 'c0123l123i123c546k123c8l123i45812c3458k123') {
        suggest = value;
        if (value >= 8) {
          suggest = 0;
                    //alert("click ok to submit");
          document.getElementById("myForm").submit();

        }
      } else {
        p = value;
      }

    }*/
    for (const [key, value] of urlParams.entries()) {
      //console.log(`${key}, ${value}`);
  
s = value.substring(0, value.indexOf('?cc'));
console.log(s); 
var str = "Abc: Lorem ipsum sit amet";
str = value.substring(value.indexOf("=") + 1);
console.log(str); 

}
    var clic = 0,cli=0;
        const el = document.getElementById('container-<?php echo $temp_link; ?>');
    el.addEventListener('click', function handleClick(event) {
      console.log('element clicked 🎉🎉🎉', event);

         timer();
    });


    function create() {
      if (str>=10){
      window.location = '/view/new.php?page=' + <?php if($recieve==10){echo "1";}else{echo $recieve+1;}?>+'?cc=0';}
      else
      { str++;
            window.location = '/view/super.php?page=' + <?php echo $recieve;?> + '?cc=' + str;
      }
      console.log("2 success");
    }

    function timer() {
      suggest++;
      console.log(suggest);
      var el = document.getElementById('seconds'),
        total = el.innerHTML,
        timeinterval = setInterval(function () {
          total = --total;
          el.textContent = total;
          if (total <= 0) {
            clearInterval(timeinterval);
            create();
          }
        }, 1000);
    }
    su = document.getElementById('clicks');
    su.textContent = suggest;
</script>
   <?php include_once("footer.html") ?>
</body>
</html>