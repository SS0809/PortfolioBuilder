<?php
namespace Php;
//error_reporting(0);
include "a.html";
session_start();
use \Php\Member;
if (! empty($_SESSION["userId"])) {
    require_once __DIR__ . './../class/Member.php';
    $member = new Member();
    $memberResult = $member->getMemberById($_SESSION["userId"]);
    if(!empty($memberResult[0]["display_name"])) {
        $profile_pic = $memberResult[0]["filename"];
        $username = ucwords($memberResult[0]["user_name"]);
    } else {
        $profile_pic = $memberResult[0]["filename"];
        $username = $memberResult[0]["user_name"];
    }
}
// If upload button is clicked ...
if (isset($_GET['upload'])) {
    $filename = $_GET['data'];
	$db = mysqli_connect("remotemysql.com", "IIVAjfeDkk", "zzrye8TbMy", "IIVAjfeDkk");
    $sql = "UPDATE `registered_users` SET `filename` = '$filename' WHERE `user_name` = '$username';";
	mysqli_query($db, $sql);
$query = " select * from registered_users where `user_name`  = '$username'";
$result = mysqli_query($db, $query);
}
?>
<html lang="en">
<head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">-->
</head>
<br><br><br><br><br><br>
<style type="text/css">
    body {
color:orange;
  background-color: black;
  style=" font-weight: 800;"
}
</style>
<script>
  UPLOADCARE_PUBLIC_KEY = "b4948793d3044a69aee7";
  var temp = "<?php echo $profile_pic; ?>";
         var pic = document.getElementById("pic");
        pic.setAttribute('src', temp);
</script>
<script charset="utf-8" src="//ucarecdn.com/libs/widget/3.x/uploadcare.full.min.js">   
</script>
<body>
    <div class="float"><a href="../index.php" class="btn btn-info">Profile</a></div>
    <center>
<input type="hidden" role="uploadcare-uploader" name="my_file" id="uploadcare-file" /><br><br>
<form method="get" name="form" action="upload2.php">
        <input type="hidden" id = "uploadfile" placeholder="WAIT..." name="data"><br>
        <br>
		<button class="btn btn-primary" type="submit" name="upload">UPLOAD</button><br><br>
</form></center>
</body>
<script>  
  const widget = uploadcare.Widget('[role=uploadcare-uploader]');
  widget.onUploadComplete(info => {
    console.log(info.cdnUrl);
document.getElementById("uploadfile").value = info.cdnUrl;
  });</script>
</html>
<br><br><br><br><br><br><br><br><br><br>
<?php   include "footer.html";?>