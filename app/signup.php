<?php
$showAlert = false;
$showError = false;
$exists=false;
	include 'dbconnect.php';
if($_SERVER["REQUEST_METHOD"] == "POST") {
	}
if (isset($_POST['submit'])) {
//https://codeforgeek.com/google-recaptcha-tutorial/
           $captcha;
            if(isset($_POST['g-recaptcha-response'])){
          $captcha=$_POST['g-recaptcha-response'];
        }
        $secretKey = "6Lcg9achAAAAAFD2N47nbdn0aodPL5OKyYKEO5MR";
        $ip = $_SERVER['REMOTE_ADDR'];
        // post request to server
        $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
        $response = file_get_contents($url);
        $responseKeys = json_decode($response,true);
        // should return JSON with success as true
        if($responseKeys["success"]!=1) {
                include './view/getlost.php'; 
                return false;
			     } else { echo 'done';
			     // Include file which makes the
	// Database Connection.
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
			
	}// end if	
if($num>0)
{
	$exists="Username not available";
}//end if		
}
if($suggest != "")//not empty
{
	$sql = "UPDATE registered_users SET points=points+50 where user_name = '$suggest';";
	$result = mysqli_query($conn, $sql); 

	$sql = "UPDATE registered_users SET  suggest = '' where user_name = '$username';";
	$result = mysqli_query($conn, $sql); 
}
        }
	// code...
}
?>
<!doctype html>	
<html lang="en">
<head>	

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
	<style type="text/css">
body
{
     color: white;
   background-image: linear-gradient(120deg,  black, #1C2A3D);
}
#super{
  animation: blink 2s ease forwards;
  animation-iteration-count:1;
    }
#element{
  position:absolute;
  top:-550px;
  animation: drop 0.9s ease forwards;
  animation-iteration-count:1;
}
#element2{
  position:absolute;
  top:-340px;
  animation: drop 1.1s ease forwards;
  animation-iteration-count:1;
}
#element1{
  position:absolute;
  top:-410px;
  animation: drop 1.2s ease forwards;
  animation-iteration-count:1;
}
#element0{
position:absolute;
  top:-480px;
  animation: drop 0.8s ease forwards;
  animation-iteration-count:1;  
}
#element4{
	  position:absolute;
  top:-270px;
  animation: drop 0.8s ease forwards;
  animation-iteration-count:1;  
}
#element5{
	  position:absolute;
    top:-530px;
    font-size: 0.8em;
   transform: translateX(20px);
}
#element6{
  padding: 10px;
    border: none;
    border-radius: 10%;
background-color: #659CE5;
}
#element8{
	    font-size: 0.8em;
 	  position:absolute;
right: 10px;
}

@keyframes drop{
  0%{opacity: 0}
  70%{transform: translateY(750px)}
  85%{transform: translateY(670px);}
  100%{transform: translateX(40px)translateY(670px);}
}
@keyframes slide1{
  0%{transform: translateX(-120px)}
  60%{transform: translateX(100px);}
  100%{transform: translateX(-90px);}
}
@keyframes slide2{
  0%{transform: translateX(-120px)}
  100%{transform: translateX(20px);}
}
@keyframes blink{
  0%{opacity: 30%;}
  80%{opacity: 80%;}
    90%{opacity: 40%;color: orange;}
      95%{opacity: 100%;}
        100%{opacity: 100%;}
}
</style>
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
		<h2 style="color: blueviolet;"  id="super">SUBXSUB</h2>
<div class="container my-4 ">	
	<h2 class="text-center">Signup Here</h2>
	<form id="comment_form" action="signup.php" method="post">
		<div class="form-group" id="element">
			<label for="username">Username</label><small style="float:right;">{do not use space}</small>
		<input type="text" class="form-control" id="username"
			name="username" aria-describedby="emailHelp" value="username">	
		</div>	
		<div class="form-group" id="element0">
			<label for="display_name">Display Name</label>
		<input type="text" class="form-control" id="display_name"
			name="display_name" aria-describedby="emailHelp" value="display_name">	
		</div>	
		<div class="form-group" id="element1">
			<label for="email">Email</label>
		<input type="text" class="form-control" id="email"
			name="email" aria-describedby="emailHelp" value="email@gmail.com">	
		</div>	
		<div class="form-group">
		<input type="hidden" id="suggest"
			name="suggest" value ="NO">	
			</div>	
		<div class="form-group" id="element2">
			<label for="password">Password</label>
			<input type="password" class="form-control"
			id="password" name="password" value="NO">
		</div>	
		<div class="form-group" id="element4">
			<label for="cpassword">Confirm Password</label>
			<input type="password" class="form-control"
				id="cpassword" name="cpassword" value="NO">	
			<small id="emailHelp" class="form-text text-muted">
			Make sure to type the same password
			</small>
		</div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <div class="g-recaptcha" data-sitekey="6Lcg9achAAAAAGQwmDMvU4mRx9qlcYwZj6pGonHw"></div>
		<button type="submit" name="submit" value="Post comment" id = "element6" onclick="chngcolor();">
		SignUp
		</button>
	</form>
</div>	
Already have a account  <a href = "/index.php">login</a>
<br><br><br><br>
    <div id="element8">CSS BY <b style="color: blueviolet;">DEVIL</b></div>
    <br>
</body> <script>
	        function chngcolor()
        {
        document.getElementById('element6').id = 'element7';
        }
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
</html>
