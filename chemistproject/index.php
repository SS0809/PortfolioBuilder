<?php
date_default_timezone_set("Asia/Calcutta");
if(isset($_POST['submit'])){

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "chemist";
    $conn = mysqli_connect($servername,
        $username, $password, $database);

    if($conn) {
    //  echo "success";
    }
    else {
        die("Error". mysqli_connect_error());
}
$linebreak ="
";
$timestampp = date("dmyhis")."\t";
$opd = $_POST['OPD']."\t";
$Drug1 = $_POST['Drug1']."\t";
$Qty1 = $_POST['Qty1']."\t";
$Drug2 = $_POST['Drug2']."\t";
$Qty2 = $_POST['Qty2']."\t";
$Drug3 = $_POST['Drug3']."\t";
$Qty3 = $_POST['Qty3']."\t";
$Drug4 = $_POST['Drug4']."\t";
$Qty4 = $_POST['Qty4']."\t";
$Drug5 = $_POST['Drug5']."\t";
$Qty5 = $_POST['Qty5']."\t";
$Drug6 = $_POST['Drug6']."\t";
$Qty6 = $_POST['Qty6']."\t";
$Drug7 = $_POST['Drug7']."\t";
$Qty7 = $_POST['Qty7']."\t";
$Drug8 = $_POST['Drug8']."\t";
$Qty8 = $_POST['Qty8']."\t";
$Drug9 = $_POST['Drug9']."\t";
$Qty9 = $_POST['Qty9']."\t";
$Drug10 = $_POST['Drug10']."\t";
$Qty10 = $_POST['Qty10'];


$sql = "INSERT INTO `pateint` ( `timestampp`, `opd`,  `drug1`, `qty1`, `drug2`, `qty2`, `drug3`, `qty3`, `drug4`, `qty4`, `drug5`, `qty5`, `drug6`, `qty6`, `drug7`, `qty7`, `drug8`, `qty8`, `drug9`, `qty9`, `drug10`, `qty10`) VALUES ( '$timestampp ', '$opd',  '$Drug1', '$Qty1', '$Drug2', '$Qty2', '$Drug3', '$Qty3', '$Drug4', '$Qty4', '$Drug5', '$Qty5', '$Drug6', '$Qty6', '$Drug7', '$Qty7', '$Drug8', '$Qty8', '$Drug9', '$Qty9', '$Drug10', '$Qty10'); ";
     $result = mysqli_query($conn, $sql); 


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>DATABASE</title>
</head>
<body class="blogdesire-body">
  <div class="blogdesire-wrapper">
    <div class="blogdesire-heading">
      AMIT DISPENSARY DATABASE
    </div>
	
<form class="blogdesire-form" method="post">

<input type="text" name="OPD" placeholder="Enter OPD No." required autocomplete="off"> <br>
<input type="text" name="Drug1" placeholder="Select Medicine Name" autocomplete="off"> <br>
<input type="text" name="Qty1" placeholder="Select Qty."  autocomplete="off"> <br>
<input type="text" name="Drug2" placeholder="Select Medicine Name" autocomplete="off"> <br>
<input type="text" name="Qty2" placeholder="Select Qty."  autocomplete="off"> <br>
<input type="text" name="Drug3" placeholder="Select Medicine Name" autocomplete="off"> <br>
<input type="text" name="Qty3" placeholder="Select Qty."  autocomplete="off"> <br>
<input type="text" name="Drug4" placeholder="Select Medicine Name" autocomplete="off"> <br>
<input type="text" name="Qty4" placeholder="Select Qty."  autocomplete="off"> <br>
<input type="text" name="Drug5" placeholder="Select Medicine Name" autocomplete="off"> <br>
<input type="text" name="Qty5" placeholder="Select Qty."  autocomplete="off"> <br>
<input type="text" name="Drug6" placeholder="Select Medicine Name" autocomplete="off"> <br>
<input type="text" name="Qty6" placeholder="Select Qty."  autocomplete="off"> <br>
<input type="text" name="Drug7" placeholder="Select Medicine Name" autocomplete="off"> <br>
<input type="text" name="Qty7" placeholder="Select Qty."  autocomplete="off"> <br>
<input type="text" name="Drug8" placeholder="Select Medicine Name" autocomplete="off"> <br>
<input type="text" name="Qty8" placeholder="Select Qty."  autocomplete="off"> <br>
<input type="text" name="Drug9" placeholder="Select Medicine Name" autocomplete="off"> <br>
<input type="text" name="Qty9" placeholder="Select Qty."  autocomplete="off"> <br>
<input type="text" name="Drug10" placeholder="Select Medicine Name" autocomplete="off"> <br>
<input type="text" name="Qty10" placeholder="Select Qty."  autocomplete="off"> <br>

<input type="submit" name="submit" value="Submit" class="blogdesire-submit">
    </form>
  </div>
</body>
</html>