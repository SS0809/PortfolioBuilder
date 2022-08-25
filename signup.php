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
	$display_name = $_POST["display_name"];
	$email = $_POST["email"];
	$cpassword = $_POST["cpassword"];
	$suggest = $_POST["suggest"];
	$sql = "Select * from registered_users where user_name='$username'";
	$result = mysqli_query($conn, $sql);
	$num = mysqli_num_rows($result);
	// This sql query is use to check if
	// the username is already present
	// or not in our Database
	if($num == 0) {
		if(($password == $cpassword) && $exists==false) {
			//$hash = password_hash($password,PASSWORD_DEFAULT);
								$hash  = md5($password);
			// Password Hashing is used here.
			$sql = "INSERT INTO `registered_users` ( `user_name`,`display_name`,`password`,`email`,`suggest`)
			VALUES ('$username', '$display_name' ,
				'$hash','$email','$suggest')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				$showAlert = true;}
		}
		else {
			$showError = "Passwords do not match";
		}	
	}// end if	
if($num>0)
{
	$exists="Username not available";
}	
}//end if	
?>	
<!doctype html>	
<html lang="en">
<head>	
<script>
        const urlParams = new URLSearchParams(location.search);
        let suggest ;
        for (const [key,value] of urlParams) {
             suggest = value ;
        }
      // function myurl()
       { 
       //window.location.href = url2;
	   console.log(suggest);
	   document.getElementById('suggest').value = suggest ;
       }
        </script> 
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content=
		"width=device-width, initial-scale=1,
		shrink-to-fit=no">	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
		integrity=
"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
		crossorigin="anonymous">
</head>
<body>
<?php
	if($showAlert) {
		echo ' <div class="alert alert-success
			alert-dismissible fade show" role="alert">
			<strong>Success!</strong> Your account is
			now created and you can login.
			<button type="button" class="close"
				data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
		</div> 
		<script> setTimeout(function(){ window.location="/index.php"; },2000);</script>';
	}
	if($showError) {
		echo ' <div class="alert alert-danger
			alert-dismissible fade show" role="alert">
		<strong>Error!</strong> '. $showError.'
	<button type="button" class="close"
			data-dismiss="alert aria-label="Close">
			<span aria-hidden="true">×</span>
	</button>
	</div> ';
}	
	if($exists) {
		echo ' <div class="alert alert-danger
			alert-dismissible fade show" role="alert">
		<strong>Error!</strong> '. $exists.'
		<button type="button" class="close"
			data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">×</span>
		</button>
	</div> ';
    }
?>
  <script src='https://www.google.com/recaptcha/api.js' async defer>//https://codeforgeek.com/google-recaptcha-tutorial/</script>
<div class="container my-4 ">	
	<h1 class="text-center">Signup Here</h1>
	<form id="comment_form" action="signup.php" method="post">
		<div class="form-group">
			<label for="username">Username</label>
		<input type="text" class="form-control" id="username"
			name="username" aria-describedby="emailHelp">	
		</div>	
		<div class="form-group">
			<label for="display_name">Display Name</label>
		<input type="text" class="form-control" id="display_name"
			name="display_name" aria-describedby="emailHelp">	
		</div>	
		<div class="form-group">
			<label for="email">Email</label>
		<input type="text" class="form-control" id="email"
			name="email" aria-describedby="emailHelp">	
		</div>	
		<div class="form-group">
		<input type="hidden" id="suggest"
			name="suggest" value ="NO">	
			</div>	
		<div class="form-group">
			<label for="password">Password</label>
			<input type="password" class="form-control"
			id="password" name="password">
		</div>	
		<div class="form-group">
			<label for="cpassword">Confirm Password</label>
			<input type="password" class="form-control"
				id="cpassword" name="cpassword">	
			<small id="emailHelp" class="form-text text-muted">
			Make sure to type the same password
			</small>
		</div>
      <div class="g-recaptcha" data-sitekey="6Lcg9achAAAAAGQwmDMvU4mRx9qlcYwZj6pGonHw"></div>
		<button type="submit" class="btn btn-primary" name="submit" value="Post comment">
		SignUp
		</button>
	</form>
</div>	
Already have a account  <a href = "/index.php">login</a>
</body> 
</html>
<?php
//https://codeforgeek.com/google-recaptcha-tutorial/
           $captcha;
            if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        if(!$captcha){
          echo 'Please check the the captcha form.';
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
                echo 'Thanks for posting comment';   
			     } else { echo 'You are spammer ! Get the @$%K out';
        }
?>