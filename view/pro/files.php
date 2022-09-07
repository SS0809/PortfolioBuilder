<?php
include '../../dbconnect.php';
if($_SERVER["REQUEST_METHOD"] == "POST") {
   $user = $_POST["user"];
   $sql = "Select * from registered_users where user_name='$user'";
   $result = mysqli_query($conn, $sql);
   $num = mysqli_num_rows($result);
   while($row = mysqli_fetch_assoc($result)) {
   $name = $row["user_name"];
   $pay = $row["pay"];
  $tempp = "saurabh";
  $insta =  $row["insta"];
$youtube =  $row["youtube"];
$mail =  $row["email"];
$profile_pic =  $row["filename"];
$about =  $row["about"];
$sabout =  $row["sabout"];
$goal =  $row["goal"];
  }
if ($pay=="1") {
$newcontent = file_get_contents("pro.php");
$newcontent = str_replace('$$_name',$name, $newcontent);
$newcontent = str_replace('$$_pic',$profile_pic, $newcontent);
$newcontent = str_replace('$$_about',$about, $newcontent);
$newcontent = str_replace('$$_sabout',$sabout, $newcontent);
$newcontent = str_replace('$$_goal',$goal, $newcontent);
$newcontent = str_replace('$$_insta',$insta, $newcontent);
$newcontent = str_replace('$$_youtube',$youtube, $newcontent);
$newcontent = str_replace('$$_mail',$mail, $newcontent);
echo $newcontent;
}
else
{
   include "../not1.html";
}
}
?>