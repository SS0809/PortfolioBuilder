<?php
namespace Php;
//error_reporting(0);
session_start();
use \Php\Member;
if (! empty($_SESSION["userId"])) {
    require_once __DIR__ . './.././../class/Member.php';
    $member = new Member();
    $memberResult = $member->getMemberById($_SESSION["userId"]);
    if(!empty($memberResult[0]["display_name"])) {
        $displayname = ucwords($memberResult[0]["display_name"]);
        $username = $memberResult[0]["user_name"];
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

$newcontent = file_get_contents("pro.php");
$tempp = "saurabh";
$name = "Saurabh";
$insta = "Saurabh";
$youtube = "Saurabh";
$mail = "Saurabh";
$about = "bjfoigbvibvi igfidbvhiuy gviregvuieurvgrehv uiregvgreui vgi regvuigrevuireun8ghvrueihvrgeivghr78e uireu4h grueghure g7yu";
$sabout = "bjfoigbvibvi igfidbvhiuy";
$goal = "Developer";
$pic = "https://ucarecdn.com/32a6b413-cf74-43a1-a9d1-9400de5b2881/";
$newcontent = str_replace('$$_name',$name, $newcontent);
$newcontent = str_replace('$$_pic',$pic, $newcontent);
$newcontent = str_replace('$$_about',$about, $newcontent);
$newcontent = str_replace('$$_sabout',$sabout, $newcontent);
$newcontent = str_replace('$$_goal',$goal, $newcontent);
$newcontent = str_replace('$$_insta',$insta, $newcontent);
$newcontent = str_replace('$$_youtube',$youtube, $newcontent);
$newcontent = str_replace('$$_mail',$mail, $newcontent);
echo $newcontent;
}
?>