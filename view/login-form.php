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
			    							<h2>	<a href="./signup.php" class="navbar_element">SIGN UP</a></h2>
			    				</li>			    	   				
			    </ul>
		 </nav>		 
		 <center>
		 <div class="corousel">
		 				<img src="logo_sec_01.png" alt="logo" class="head_img">
		 </div> 
		   <div class="workbox">
					<h3 class="workbox_title">Login Here</h3> 	
		    </div>
		 </center>
</head>
        <div class="container my-4 ">	
        <form action="login-action.php" method="post" id="frmLogin" onSubmit="return validate();">
  

                <div class="form-head">Login</div>
                <?php 
                if(isset($_SESSION["errorMessage"])) {
                ?>
                <div class="error-message"><?php  echo $_SESSION["errorMessage"]; ?></div>
                <?php 
                unset($_SESSION["errorMessage"]);
                } 
                ?>
                     <div class="form-group">
                    <div>
                        <label  class = "text-white" for="username">Username</label><span id="user_info" class="error-info"></span>
                    </div>
                    <div>
                        <input name="user_name" class="form-control" id="user_name" type="text"
                           >
                    </div>
                </div>
                     <div class="form-group">
                    <div>
                        <label  class = "text-white" for="password">Password</label><span id="password_info" class="error-info"></span>
                    </div>
                    <div>
                        <input name="password" class="form-control" id="password" type="password"
                          >
                    </div>
                </div>        
                <div class="form-group">
                    <div>
                        <input type="submit"  class="btn btn-primary" name="login" value="Login"
                        class="btnLogin"></span>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <br><br><br>
    <script>
    function validate() {
        var $valid = true;
        document.getElementById("user_info").innerHTML = "";
        document.getElementById("password_info").innerHTML = "";
        
        var userName = document.getElementById("user_name").value;
        var password = document.getElementById("password").value;
        if(userName == "") 
        {
            document.getElementById("user_info").innerHTML = "required";
        	$valid = false;
        }
        if(password == "") 
        {
        	document.getElementById("password_info").innerHTML = "required";
            $valid = false;
        }
        return $valid;
    } 
  function getCookie(name)
  {
    var re = new RegExp(name + "=([^;]+)");
    var value = re.exec(document.cookie);
    return (value != null) ? unescape(value[1]) : null;
  }
  document.getElementById('user_name').value = getCookie("user") ;
  document.getElementById('password').value = getCookie("password") ;
     </script>
<?php
    include '../footer.php';
?>
</body>
</html>