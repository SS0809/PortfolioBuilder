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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!--BOOTSTRAP-->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<nav class="navbar navbar-dark fixed-top bg-dark">
    <div class="container-fluid" style="font-weight: 900;">
<a class="navbar-brand" href="/index.php" style="color: blueviolet; font-weight: 900;">SUBXSUB</a>
 <button type="button" class="navbar-toggle collapsed bg-dark" data-toggle="collapse" data-target=".navbar-collapse"
            >
                 <span class="navbar-toggler-icon bg-dark"></span>
            </button>
        <a class="navbar-brand-right" href="#">
      <img id = "pic" src="logo_sec_01.png" alt="Logo" style="width:40px;" class="rounded-pill">
    </a>   
        
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse">
           <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" id = "home"  aria-current="page" href="<?php getcwd()?>">DASHBOARD</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" id = "movies"  href="view/movies.php">Movies</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id = "blogs"  href="./blog/index.html">Blogs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id = "upload"  href="view/upload2.php">UPLOAD</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id = "earnpoints"  href="view/points.php">EARN POINT$</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="leaderboard" href="view/leaderboard.php">LEADERBOARD</a>
          </li>
          </ul>
         <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                    <li class="nav-item">
            <a class="nav-link" id = "logout" style="font-weight: 900;" href="logout.php"><mark>LOGOUT</mark></a>
          </li>
        </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<script type="text/javascript">
          var points = document.getElementById("points"),
          blogs = document.getElementById("blogs"),
          movies = document.getElementById("movies"),
          yt = document.getElementById("yt"),
          upload = document.getElementById("upload"),
          logout = document.getElementById("logout"),
          home = document.getElementById("home");
          </script>
 </body>
 </html>
