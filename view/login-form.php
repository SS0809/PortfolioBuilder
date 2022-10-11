<html>
<head>
<title>SUBXSUB user login</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="./view/css/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">

  body
{
     color: white;
}
#super{
  animation: blink 2s ease forwards;
  animation-iteration-count:1;
    }
#element{
  position:absolute;
  top:-350px;
  animation: drop 0.9s ease forwards;
  animation-iteration-count:1;
}
#element2{
  position:absolute;
  top:-450px;
  animation: drop 1.1s ease forwards;
  animation-iteration-count:1;
}
#element1{
  position:absolute;
  top:-530px;
  animation: drop 1.2s ease forwards;
  animation-iteration-count:1;
}
#element0{
  animation: slide1 0.8s ease forwards;
  animation-iteration-count:1;  
}
#element4{
  animation: slide2 0.8s ease forwards;
  animation-iteration-count:1;  
}
#element5{
    font-size: 0.8em;
      position:absolute;
right: 10px;
}
#element6{
  padding: 10px;
    border: none;
    border-radius: 10%;
background-color: #659CE5;
}
#element7{
  padding: 10px;
    border: none;
    border-radius: 10%;
background-color: #8CCE5A;

}

@keyframes drop{
  0%{opacity: 0}
  70%{transform: translateY(750px)}
  85%{transform: translateY(670px);}
  100%{transform: translateX(60px)translateY(670px);}
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
    <div>
        <form action="login-action.php" method="post" id="frmLogin" onSubmit="return validate();">
            <!--<div class="demo-table">-->
                     <h1 style="color: blueviolet;" id="super">SUBXSUB</h1>
                <div class="form-head" id="element0" style="color: white"; >LOGIN</div><br>
                <?php 
                if(isset($_SESSION["errorMessage"])) {
                ?>
                <div class="error-message"><?php  echo $_SESSION["errorMessage"]; ?></div>
                <?php 
                unset($_SESSION["errorMessage"]);
                } 
                ?>
                <div class="field-column" id="element1">
                    <div>
                        <label for="username">Username</label><span id="user_info" class="error-info"></span>
                    </div>
                    <div>
                        <input name="user_name" id="user_name" type="text"
                            class="demo-input-box">
                    </div>
                </div>
                <br>
                <div class="field-column" id="element2">
                    <div>
                        <label for="password">Password</label><span id="password_info" class="error-info"></span>
                    </div>
                    <div>
                        <input name="password" id="password" type="password"
                            class="demo-input-box">
                    </div>
                </div>
                <br>
                <div class=field-column id="element">
                    <div>
                        <input type="submit" name="login" value="Login" id ="element6"
                        onclick="chngcolor();"></span>
                    </div>
                </div>
            </div>
        </form>
    </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div id="element4">Don't have a account  <a href = "/signup.php">Sign up</a></div>
    <br><br><br><br><br><br>
    <div id="element5">CSS BY <b style="color: blueviolet;">DEVIL</b></div>
    <script>
        function chngcolor()
        {
        document.getElementById('element6').id = 'element7';
        }
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
</body>
</html>
