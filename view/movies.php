<?php
namespace Php;
//error_reporting(0);
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

include "a.html";

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>MOVIES</title>
<link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/"> 
<link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="css.css" rel="stylesheet">
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>   
<header>
  <!--<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/index.php">SUBXSUB</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link" href="../index.php">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="movies.php">Movies</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../logout.php">Logout</a>
          </li>
        </ul>
        < !-- <form class="d-flex" role="search">
         <input class="form-control me-2" type="search" placeholder="coming soon" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>-- >
        <form>
          <input class="form-control me-2" type="search" placeholder="coming soon" aria-label="Search" type="text" size="30" onkeyup="showResult(this.value)">
          <div id="livesearch"></div>
          </form>
      </div>
    </div>
  </nav>-->
</header>
<!--BOOTSTRAP-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!--BOOTSTRAP-->
  <!--AJAX-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!--AJAX-->
  <!--AJAX--loader-->

  <script>

  $(document).ready(function(){
       
       $('#content').load("../pages/00.html");
    
    });
    function loader(num){
       $(document).ready(function(){
       
       $('#content').load("../pages/"+num+".html");
    
    });
    }
     </script>
<!--AJAX--loader-->
<script type="text/javascript">
    atOptions = {
        'key' : '11f331744832c0b8cd73521073d1bd75',
        'format' : 'iframe',
        'height' : 50,
        'width' : 320,
        'params' : {}
    };
    document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.highperformancedisplayformat.com/11f331744832c0b8cd73521073d1bd75/invoke.js"></scr' + 'ipt>');
</script>
<!--SEARCH-->
<br>
<br>
<form>
          <input class="form-control me-2" type="search" placeholder="Search Movies HEre" aria-label="Search" type="text" size="30" onkeyup="showResult(this.value)">
          <div id="livesearch"></div>
          </form>
<script>
const element1 = document.getElementById("leaderboard");
element1.remove();
const element2 = document.getElementById("blogs");
element2.remove();
const element3 = document.getElementById("upload");
element3.remove();
const element4 = document.getElementById("movies");
element4.remove();
          var temp = "<?php echo $profile_pic; ?>";
         var pic = document.getElementById("pic");
        pic.setAttribute('src', temp);
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","search.php?q="+str,true);
  xmlhttp.send();
}
</script>
<!--SEARCH-->







</head>
<body onload = "loader('01')">
<div class="container mt-3">
  <button  type="button" class="btn btn-success" onclick = "loader('01')">01</button>
  <button  type="button" class="btn btn-success" onclick = "loader('02')">02</button>
  <button  type="button" class="btn btn-success" onclick = "loader('03')">03</button>
  <button  type="button" class="btn btn-success" onclick = "loader('04')">04</button>
  <button  type="button" class="btn btn-success" onclick = "loader('05')">05</button>
  <br>
    <div id="content">
    </div>
</div>
<br>
 <!--<a href = "/server/refer.html?url=/server/refer2.html?url2=cdn-s.blogspot.com/2022/08/kgf-2.html">REFER</a>-->
</body>
<?php include_once("footer.html") ?>
    <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>      
  </body>
  <!---ADS--->
<script type="text/javascript">
  atOptions = {
    'key' : '6201053067b6652a3e4c92c1e0145b6f',
    'format' : 'iframe',
    'height' : 50,
    'width' : 320,
    'params' : {}
  };
  document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.highperformancedisplayformat.com/6201053067b6652a3e4c92c1e0145b6f/invoke.js"></scr' + 'ipt>');
</script>
<script type="text/javascript">
  atOptions = {
    'key' : '5dfed61463bd5356ae701e3a69964dc4',
    'format' : 'iframe',
    'height' : 50,
    'width' : 320,
    'params' : {}
  };
  document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.highperformancedisplayformat.com/5dfed61463bd5356ae701e3a69964dc4/invoke.js"></scr' + 'ipt>');
</script>
<script type="text/javascript">
  atOptions = {
    'key' : '89d61dc2a52f9413360c65d32714d577',
    'format' : 'iframe',
    'height' : 50,
    'width' : 320,
    'params' : {}
  };
  document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.highperformancedisplayformat.com/89d61dc2a52f9413360c65d32714d577/invoke.js"></scr' + 'ipt>');
</script>
<script type="text/javascript">
  atOptions = {
    'key' : 'f1f0daddbd8ff170fe8a239c5d534ed2',
    'format' : 'iframe',
    'height' : 50,
    'width' : 320,
    'params' : {}
  };
  document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.highperformancedisplayformat.com/f1f0daddbd8ff170fe8a239c5d534ed2/invoke.js"></scr' + 'ipt>');
</script>
<script type="text/javascript">
  atOptions = {
    'key' : '742094fc28bb7bf3e0054cbd72d9a763',
    'format' : 'iframe',
    'height' : 50,
    'width' : 320,
    'params' : {}
  };
  document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://www.highperformancedisplayformat.com/742094fc28bb7bf3e0054cbd72d9a763/invoke.js"></scr' + 'ipt>');
</script>
<script type="text/javascript">
  atOptions = {
    'key' : '4ffd6b58ad7e80b4ddc48329052439ae',
    'format' : 'iframe',
    'height' : 50,
    'width' : 320,
    'params' : {}
  };
  document.write('<scr' + 'ipt type="text/javascript" src="http' + (location.protocol === 'https:' ? 's' : '') + '://crossroadparalysisnutshell.com/4ffd6b58ad7e80b4ddc48329052439ae/invoke.js"></scr' + 'ipt>');
</script><br>

<!---ADS--->
</html>
<?php 
}else{
header("Location: ../index.php");
die();
}
?>