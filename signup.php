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
<!DOCTYPE html>
<html>
<html lang="en">
<head>
	 <!-- Bootstrap CSS -->
	 <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
		integrity=
"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
		crossorigin="anonymous">
			 <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css.css">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
</head>
<body>
			<nav class="navbar_manual">
			    <input type="image" src="new-logo.png" alt="logo" class="logo"> 
			    <ul class="navbar_list">	
			    				<li class="nav_li">
			    							<h2>	<a href="./index.php" class="navbar_element">LOGIN</a></h2>
			    				</li>			    	   				
			    </ul>
		 </nav>		 
		 <center>
		 <div class="corousel">
		 				<img src="logo_sec_01.png" alt="logo" class="head_img">
		 </div> 
		   <div class="workbox">
					<h3 class="workbox_title">Signup Here</h3> 	
		    </div>
		 </center>
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
	<form id="comment_form" action="signup.php" method="post">
		<div class="form-group">
			<label  class = "text-white"  for="username">Username</label>
		<input type="text" class="form-control" id="username"
			name="username" aria-describedby="emailHelp">	
		</div>	
		<div class="form-group">
			<label  class = "text-white"  for="display_name">Display Name</label>
		<input type="text" class="form-control" id="display_name"
			name="display_name" aria-describedby="emailHelp">	
		</div>	
		<div class="form-group">
			<label  class = "text-white"  for="email">Email</label>
		<input type="text" class="form-control" id="email"
			name="email" aria-describedby="emailHelp">	
		</div>	
		<div class="form-group">
		<input type="hidden" id="suggest"
			name="suggest" value ="NO">	
			</div>	
		<div class="form-group">
			<label  class = "text-white"  for="password">Password</label>
			<input type="password" class="form-control"
			id="password" name="password">
		</div>	
		<div class="form-group">
			<label  class = "text-white"  for="cpassword" >Confirm Password</label>
			<input type="password" class="form-control" class = "text-white"
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
</body> <script>
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
    <!--<div class="can_01">
		<div class="workbox">
						<h2 class="workbox_title">
										HOW IT WORKS ?
						</h2>
						<ul class="workbox_list">
										<li class="workbox_list_element">
														<h3>STEP 1</h3>
														<p>Paste your Youtube Channel Link / Channel ID above.</p>
										</li>
										<li class="workbox_list_element">
														<h3>STEP 2</h3>
														<p>Earn credits by Subscribing & Liking other Channels & Videos.</p>
										</li>
										<li class="workbox_list_element">
														<h3>STEP 3</h3>
														<p>Boost your YouTube Channel using this credits.</p>
										</li>
										
						</ul>
		</div>
		</div>-->
		<?php
    include '../footer.php';
?>
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