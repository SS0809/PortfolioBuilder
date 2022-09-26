<?php
date_default_timezone_set("Asia/Calcutta");
if(isset($_POST['submit'])){

$linebreak ="
";
$datetime = date("dmyhis")."\t";
$OPD = $_POST['OPD']."\t";
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

$file=fopen("Entries.odf", "a");

fwrite($file, $linebreak);
fwrite($file, $datetime);
fwrite($file, $OPD);
fwrite($file, $Drug1);
fwrite($file, $Qty1);
fwrite($file, $Drug2);
fwrite($file, $Qty2);
fwrite($file, $Drug3);
fwrite($file, $Qty3);
fwrite($file, $Drug4);
fwrite($file, $Qty4);
fwrite($file, $Drug5);
fwrite($file, $Qty5);
fwrite($file, $Drug6);
fwrite($file, $Qty6);
fwrite($file, $Drug7);
fwrite($file, $Qty7);
fwrite($file, $Drug8);
fwrite($file, $Qty8);
fwrite($file, $Drug9);
fwrite($file, $Qty9);
fwrite($file, $Drug10);
fwrite($file, $Qty10);

fclose($file);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>My HTML Form</title>
</head>
<body class="blogdesire-body">
  <div class="blogdesire-wrapper">
    <div class="blogdesire-heading">
      Dispensary, C.H.C. Sampla
    </div>
	
<form class="blogdesire-form" method="post">

<input type="text" name="OPD" placeholder="Enter OPD No." required autocomplete="off"> <br>
<input type="text" name="Drug1" placeholder="Select Medicine Name" required autocomplete="off"> <br>
<input type="text" name="Qty1" placeholder="Select Qty." required autocomplete="off"> <br>
<input type="text" name="Drug2" placeholder="Select Medicine Name" required autocomplete="off"> <br>
<input type="text" name="Qty2" placeholder="Select Qty." required autocomplete="off"> <br>
<input type="text" name="Drug3" placeholder="Select Medicine Name" required autocomplete="off"> <br>
<input type="text" name="Qty3" placeholder="Select Qty." required autocomplete="off"> <br>
<input type="text" name="Drug4" placeholder="Select Medicine Name" required autocomplete="off"> <br>
<input type="text" name="Qty4" placeholder="Select Qty." required autocomplete="off"> <br>
<input type="text" name="Drug5" placeholder="Select Medicine Name" required autocomplete="off"> <br>
<input type="text" name="Qty5" placeholder="Select Qty." required autocomplete="off"> <br>
<input type="text" name="Drug6" placeholder="Select Medicine Name" required autocomplete="off"> <br>
<input type="text" name="Qty6" placeholder="Select Qty." required autocomplete="off"> <br>
<input type="text" name="Drug7" placeholder="Select Medicine Name" required autocomplete="off"> <br>
<input type="text" name="Qty7" placeholder="Select Qty." required autocomplete="off"> <br>
<input type="text" name="Drug8" placeholder="Select Medicine Name" required autocomplete="off"> <br>
<input type="text" name="Qty8" placeholder="Select Qty." required autocomplete="off"> <br>
<input type="text" name="Drug9" placeholder="Select Medicine Name" required autocomplete="off"> <br>
<input type="text" name="Qty9" placeholder="Select Qty." required autocomplete="off"> <br>
<input type="text" name="Drug10" placeholder="Select Medicine Name" required autocomplete="off"> <br>
<input type="text" name="Qty10" placeholder="Select Qty." required autocomplete="off"> <br>

<input type="submit" name="submit" value="Submit" class="blogdesire-submit">
    </form>
  </div>
</body>
</html>