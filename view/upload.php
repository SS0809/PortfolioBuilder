<?php
namespace Php;
error_reporting(0);
session_start();
use \Php\Member;
if (! empty($_SESSION["userId"])) {
    require_once __DIR__ . './../class/Member.php';
    $member = new Member();
    $memberResult = $member->getMemberById($_SESSION["userId"]);
    if(!empty($memberResult[0]["display_name"])) {
        $username = ucwords($memberResult[0]["user_name"]);
    } else {
        $username = $memberResult[0]["user_name"];
    }
}
// If upload button is clicked ...
if (isset($_POST['upload'])) {
	$filename = $_FILES["uploadfile"]["name"];
	$tempname = $_FILES["uploadfile"]["tmp_name"];
	$filename = "saurabh";
	$folder = "../image/" . $filename;
	$db = mysqli_connect("remotemysql.com", "IIVAjfeDkk", "zzrye8TbMy", "IIVAjfeDkk");
    $sql = "UPDATE `registered_users` SET `filename` = '$filename' WHERE `user_name` = '$username';";
	mysqli_query($db, $sql);
	if (move_uploaded_file($tempname, $folder)) {
		echo "<h3> Image uploaded successfully!</h3>";
		echo '<script> setTimeout(function(){ window.location="/index.php"; },4000);</script>';
	} else {
		echo "<h3> Failed to upload image!</h3>";
	}
$query = " select * from registered_users where `user_name`  = '$username'";
$result = mysqli_query($db, $query);
while ($data = mysqli_fetch_assoc($result)) {
?>
	<img src="../image/<?php echo $data['filename']; ?>">
<?php
}}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
   </head>
<body>
	<div id="content">
		<form method="POST" action="" enctype="multipart/form-data">
			<div class="form-group">
				<input class="form-control" type="file" name="uploadfile" value="" />
			</div>
			<div class="form-group">
				<h1>YOUR PROFILE ISN'T VISIBLE TO ANYBODY ELSE</h1>
				<button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
			</div>
		</form>
	</div>
</body>
</html>