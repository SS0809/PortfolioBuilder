<?php
$showAlert = false;
$showError = false;
$exists=false;
if($_SERVER["REQUEST_METHOD"] == "POST") {
	// Include file which makes the
	// Database Connection.
	include 'dbconnect.php';
	$username = $_POST["username"];
	$password = $_POST["password"];
	$cpassword = $_POST["cpassword"];
	$sql = "Select * from registered_users where user_name='$username'";
	$result = mysqli_query($conn, $sql);
	$num = mysqli_num_rows($result);
}
//https://codeforgeek.com/google-recaptcha-tutorial/
        $email;$comment;$captcha;
        if(isset($_POST['username'])){
          $email=$_POST['username'];
        }
        if(isset($_POST['password'])){
          $comment=$_POST['password'];
        }
        if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
          echo '
Please check the the captcha form.
';
          exit;
        }
        $secretKey = "6Lcg9achAAAAAFD2N47nbdn0aodPL5OKyYKEO5MR";
        $ip = $_SERVER['REMOTE_ADDR'];
        // post request to server
        $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
        $response = file_get_contents($url);
        $responseKeys = json_decode($response,true);
        // should return JSON with success as true
        if($responseKeys["success"]) {
                echo '
Thanks for posting comment
';
        } else {
                echo '
You are spammer ! Get the @$%K out
';
        }
?>