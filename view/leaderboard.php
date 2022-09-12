<?php
namespace Php;?>
<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table, th, td {
  border:1px solid black;
}
body {
color:orange;
  background-color: black;
  style=" font-weight: 1000;"
}
</style>
<body> <a class="nav-link active" id = "home"  aria-current="page" href="/index.php">Home</a>
	<h2 style="color:white;">TOP <b style="color:orange;">SUBXSUB</b> SUPER USERS</h2>
    <canvas id="chart"  style="width:50%;max-width:750px"></canvas>
<table style="width:100%">
  <tr>
    <th style="color:white;">Username</th>
    <th style="color:white;">Points</th>
     <th style="color:white;">Rank</th>
    <th style="color:white;">Payment</th>
    <th style="color:white;">Portfolio</th>
  </tr>
  <?php
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
         $sudo = ucwords($memberResult[0]["sudo"]);
        $profile_pic = $memberResult[0]["filename"];
    } else {
        $username = $memberResult[0]["user_name"];
        $points = $memberResult[0]["points"];
         $sudo = $memberResult[0]["sudo"];
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
$sql = "SELECT user_name,points,pay FROM `registered_users` WHERE points > 5 ORDER BY `registered_users`.`points` DESC limit 15";
$total = 0;
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
   $dataa="";   $namee="";while($row = $result->fetch_assoc()) {
    //echo $row["user_name"]. " ---------- ". $row["points"]. "<br>";
    $total += $row["points"];    
    $dataa = $dataa . $row["points"].","; 
    $namee = $namee .'"'. $row["user_name"].'",'; 
     if ($row["pay"]==1) {
        $check = "ON"; 
       }
       else
       {
         $check = "OFF"; 
       }


      if ($row["points"]>100) {
        $rank = "1&#9734;"; 
        if ($row["points"]>500)
       {
         $rank = "2&#9734;"; 
       }}
       else 
       {
         $rank = "LOSER"; 
       }
       echo '<tr><td style="color:white;">'.$row["user_name"].'</td>'. '<td>'.$row["points"].'</td>'. '<td>'.$rank.'</td>'. '<td>Rs.'.$row["points"]*0.05.'</td>'. '<td>'.$check.'</td>'. "<br>";
     
  }
  echo "Total money in server RS:: ".$total*0.05."  You will get payment when it reaches rs.7000";
} else {
  echo "0 results";
}
$conn->close();
?>
  </tr>
</table>
</body>
</html>

<html>
<link
	rel=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"
	type="text/css"
/>
<script src=
"https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script
	src=
"https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"
	type="text/javascript"
></script>
<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script src=
"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.2.2/Chart.min.js"></script>
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
</style>
<body>
	

</body>

<script>
	var ctx = document.getElementById("chart").getContext("2d");
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

});
</script>
</html>
<?php 

$str = '10203040506070'; 
$str = substr($str, 2);
$str .="80";

?>
