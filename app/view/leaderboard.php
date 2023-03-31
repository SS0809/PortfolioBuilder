<?php
namespace Php;
?>
<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
	type="text/css"/>
<script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src=
"https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"
	type="text/javascript"></script>
<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src=
"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js"></script>
<body><br><br><br><br>
	<h2 style="color:white;">TOP <b style="color:orange;">SUBXSUB</b> SUPER USERS</h2>
    <div style="height: 500px ;width:300px">
<canvas id="chart1"  style="width:40%;max-width:550px"></canvas>
</div>
<br><br>
    <div style="height: 450px ;width:200px">
<canvas id="chart2"  style="width:40%;max-width:550px"></canvas>
</div>
<table  style="width:100% ">
  <tr>
    <th style="color:white; border:hidden;">Username</th>
    <th style="color:white; border:hidden;">Points</th>
     <th style="color:white; border:hidden;">Rank</th>
    <!--<th style="color:white;">Payment</th>
    <th style="color:white;">Portfolio</th>-->
      <th style="color:white; border:hidden;">Streak</th>
   <th style="color:white; border:hidden;">last active</th>
  </tr>
  <?php
//error_reporting(0);
//session_start();
use \Php\Member; 
include '../dbconnect.php';
include "a.html";
if (! empty($_SESSION["userId"])) {
    require_once __DIR__ . './../class/Member.php';
    $member = new Member();
    $memberResult = $member->getMemberById($_SESSION["userId"]);
    if(!empty($memberResult[0]["display_name"])) {
        $username = $memberResult[0]["user_name"];
        $points = ucwords($memberResult[0]["points"]);
         $sudo = ucwords($memberResult[0]["sudo"]);
        $profile_pic = $memberResult[0]["filename"];
       $timestampp = $memberResult[0]["timestampp"];
    } else {
        $username = $memberResult[0]["user_name"];
        $points = $memberResult[0]["points"];
         $sudo = $memberResult[0]["sudo"];
          $timestampp = $memberResult[0]["timestampp"];
                $profile_pic = $memberResult[0]["filename"];
    }
}
if($sudo == 1) {          
    
}
 else {   
   header("Location: ./not.html");
      die();
}
include '../dbconnect.php';
$sql = "SELECT user_name,points,pay,timestampp,streak FROM `registered_users` WHERE points > 5 ORDER BY `registered_users`.`points` DESC limit 20";
$total = 0;   $alpha = 0 ;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
   $dataa="";   $namee="";while($row = $result->fetch_assoc()) {
    //echo $row["user_name"]. " ---------- ". $row["points"]. "<br>";
    $total += $row["points"]; 
    if ($row["streak"] !="0") {
   
    $st = $row["streak"] . "<img src='https://emojipedia-us.s3.amazonaws.com/source/noto-emoji-animations/344/fire_1f525.gif' style='width: 40%;'>"; 
    }
    else
    {
       $st ="no data"; 
    }
    if ($row["timestampp"]==="1663658128") {
        $times = "no data";
      }  
      else{
$times = date(/*"H:i:s*/ "d-m",$row["timestampp"]);
}
    if($alpha<10)
    {$alpha++;
    $dataa = $dataa . $row["points"].","; 
    $namee = $namee .'"'. $row["user_name"].'",'; 
    }
     if ($row["pay"]==1) {
        $check = "ON"; 
       }
       else
       {
         $check = "OFF"; 
       }


      if ($row["points"]>100 && $row["points"]<1000) {
        $rank = "1&#9734;"; }
        else if ($row["points"]>999 && $row["points"]<2000)
       {
         $rank = "2&#9734;"; 
       }
         else if ($row["points"]>1999 && $row["points"]<3000)
       {
         $rank = "3&#9734;"; 
       }
         else if ($row["points"]>2999 && $row["points"]<4000)
       {
         $rank = "4&#9734;"; 
       }
       else 
       {
         $rank = "LOSER"; 
       }
       if ($alpha==1) {
         $star="<img src='https://emojipedia-us.s3.amazonaws.com/source/noto-emoji-animations/344/fire_1f525.gif' style='width: 20%;'>"."<b>LORD</b>";
       }
       else
       {
         $star="";
       }
       echo '<tr><td style="color:white;border:hidden;">'.$row["user_name"].$star.'</td>'. '<td style="border:hidden;">'.$row["points"].'</td>'. '<td style="border:hidden;">'.$rank.'</td>'./* '<td>Rs.'.$row["points"]*0.035.*/'</td>'. '<td style="border:hidden;">'.$st.'</td>'.'<td style="border:hidden;">'.$times.'</td>'. "<br>";
     
  }

  $stats = (($total*0.035)/7000)*100;

?>
<br>

<style>
  body {
   background-image: linear-gradient(120deg,  black, #1C2A3D);
  style=" font-weight: 800;"
   margin: 15px;
         }  
table, tr, td ,th {
    border: hidden;
}
     .progress-bar {
        width: 100%;
        background-color: #1c1b1b;
        padding: 3px;
        border-radius: 3px;
        box-shadow: inset 0 1px 3px rgba(0, 0, 0, .2);
      }
      
      .progress-bar-fill {
        display: block;
        height: 22px;
        background-color: #659cef;
        border-radius: 3px;
        
        transition: width 500ms ease-in-out;
      }
    </style>
    <img src="theme_-removebg.png" width="30%">
<b style="color: blueviolet;">SERVER EFFICIENCY</b>
    <div class="wrapper">
      <div class="progress-bar">
        <span id="progress-bar-fill" class="progress-bar-fill" style="color:white ; width: 70%;">70%</span>
      </div>
    </div>
<hr>
<!--<div id = "myBar" class="progress-bar progress-bar-striped progress-bar-animated" style="width:90% color:blue;">90</div>--->
<script type="text/javascript">
  var elem = document.getElementById("progress-bar-fill");    

 elem.style.width = "<?php echo $stats ; ?>%";
elem.textContent = "<?php echo $stats ; ?>%";
 var temp = "<?php echo $profile_pic; ?>";
 var pic = document.getElementById("pic");
 pic.setAttribute('src', temp);
</script>
<?php








} else {
  echo "0 results";
}
$conn->close();

//include "footer.html";
?>
  </tr>
</table>
</body>
</html>

<style>
	.container {
	width: 70%;
	margin: 15px auto;
	}
	/*body {
	text-align: center;
	color: green;
	}
	h2 {
	text-align: center;
	font-family: "Verdana", sans-serif;
	font-size: 30px;
	}*/
table, th, td {
  border:1px solid black;
}
body {
color:orange;
  background-color: black;
  style=" font-weight: 1000;"
}
</style>
<body>
	

</body>

<script>
	var ctx = document.getElementById("chart1").getContext("2d");
  var myChart = new Chart(ctx, {
  type: "bar",
  data: {
    labels: [
    <?php echo $namee;?>
    ],
    datasets: [
    {
    label: "SUBXSUB USERS",
      data: [<?php echo $dataa; ?>],
      backgroundColor: "orange",
    },
    ],
  },
options: {  
    responsive: true,
    maintainAspectRatio: false
}
});
  var ctx = document.getElementById("chart2").getContext("2d");
  var myChart = new Chart(ctx, {
  type: "pie",
  data: {
    labels: [
    <?php echo $namee;?>
    ],
    datasets: [
    {
    label: "SUBXSUB USERS",
      data: [<?php echo $dataa; ?>],
      backgroundColor: [
      "orange",
         "blue",
            "green",
               "pink",
                  "blue",
                     "brown",
                        "purple",
                           "yellow",
                              "green",
                                 "pink",
      ]    ,
    },
    ],
  },
options: {  
    responsive: true,
    maintainAspectRatio: false
}
});
</script>


<br><br><hr>
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
<!---ADS--->
</html>
<?php 

$str = '10203040506070'; 
$str = substr($str, 2);
$str .="80";
echo '<br><br><br><br><br>';
?>
<footer class="footer bg-dark">
  <div class="container">
    <div >
      <a href="/" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="01"><use xlink:href="#bootstrap"/></svg>
      </a>
    </div>

    <div >

    </div>

    <div  style=" font-weight: 600;">
      <h5 style="color: orange;"><b>SUBXSUB</b></h5>
      <ul class="nav p-6 flex-row">
       <ul class="nav p-1 flex-column">
        <a href="#" class="nav-link p-0 text-muted">Features</a>
        <a href="../pp/index.html" class="nav-link p-0 text-muted">PRIVACY POLICY</a>
        </ul> 
          <ul class="nav p-1 flex-column">
        <a href="../aus/index.html" class="nav-link p-0 text-muted">About Us</a>
        <a href="../tos/index.html" class="nav-link p-0 text-muted">TOS</a>
      </ul> 
       </ul> 
    </div>
</div>
</footer>  
