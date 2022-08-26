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
        $displayname = ucwords($memberResult[0]["display_name"]);
        $username = ucwords($memberResult[0]["user_name"]);
        $email = ucwords($memberResult[0]["email"]);
        $points = ucwords($memberResult[0]["points"]);
        $profile_pic = ucwords($memberResult[0]["filename"]);
               
				// Username is stored as cookie for 10 years as
				// 10years * 365days * 24hrs * 60mins * 60secs
				setcookie("user_login", $name, time() +
        (10 * 365 * 24 * 60 * 60));

// Password is stored as cookie for 10 years as
// 10years * 365days * 24hrs * 60mins * 60secs
setcookie("user_password", $password, time() +
        (10 * 365 * 24 * 60 * 60));

// After setting cookies the session variable will be set
$_SESSION["name"] = $name;

    } else {
        $displayname = $memberResult[0]["display_name"];
        $username = $memberResult[0]["user_name"];
        $email = $memberResult[0]["email"];
        $points = $memberResult[0]["points"];
        $profile_pic = $memberResult[0]["filename"];
    }
}
?>
<?php
    include './header.php';
?>
<br><br><br><br> 

<!-- Showing alert -->
<div  id="alert" class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="member-dashboard">Welcome <b><?php echo $displayname; ?></b>, You have successfully logged in!<br>    
      </div>

</div>
 
<div class="can_01">
		<div class="workbox-dashboard">
      <center><img src="./image/<?php echo $profile_pic; ?>" class ="border_profile" width="30%" alt="logo" class="head_img"></center>
						<h2 class="workbox_title-dashboard">
									PROFILE
						</h2>
						<ul class="workbox_list">
										<li class="workbox_list_element">
													<div>
          <div class="dashboard">       
<div class="member-dashboard">Name : <b><?php echo $displayname; ?></b></div>
<div class="member-dashboard">Username : <b><?php echo $username; ?></b></div>
<div class="member-dashboard">Email : <b><?php echo $email;?></b></div>
<div class="member-dashboard">Points : <b><?php echo $points;
if ($points <= "5" ){echo "(default)";}?></b></div><br><br>
<h3>Copy the following text and share with friends ..... with each friend you get 5 points</h3>
<input type="" value="https://server0809.herokuapp.com/signup.php?suggest=<?php echo $username; ?>" id="myInput">
<button onclick="myFunction()">SHARE</button>
        </div>
    </div>
</li>			
						</ul>
		</div>
		</div>
<?php
    include './footer.php';
?>
</body>
</html>