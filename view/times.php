<?php

/*date_default_timezone_set("Asia/Calcutta");
echo date("Y/m/d H:i:s");   */
//error_reporting(0);
include '../dbconnect.php';
   $sql = "UPDATE registered_users SET points=points-2 where pay = '1' && sudo = '1';";
   $result = mysqli_query($conn, $sql); 
?>
