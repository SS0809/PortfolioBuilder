<?php
namespace Php;
session_start();
if($_SESSION["userId"] != true){//check loggin
    header("Location: ../index.php");
    exit;
}
//error_reporting(0);
use \Php\Member;
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
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>PROXY</title>
<link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/carousel/"> 
<link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="css.css" rel="stylesheet">
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>   
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">SUBXSUB</a>
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
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
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
       
       $('#content').load("../pages/01.html");
    
    });
    function loader(num){
       $(document).ready(function(){
       
       $('#content').load("../pages/"+num+".html");
    
    });
    }
     </script>
<!--AJAX--loader-->
</head>
<body>
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
</html>