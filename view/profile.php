<?php
namespace Phppot;
session_start();
use \Phppot\Member;
if (! empty($_SESSION["userId"])) {
    require_once __DIR__ . './../class/Member.php';
    $member = new Member();
    $memberResult = $member->getMemberById($_SESSION["userId"]);
    if(!empty($memberResult[0]["display_name"])) {
        $displayname = ucwords($memberResult[0]["display_name"]);
        $username = ucwords($memberResult[0]["user_name"]);
        $email = ucwords($memberResult[0]["email"]);
        $profile_pic = ucwords($memberResult[0]["img"]);
    } else {
        $displayname = $memberResult[0]["display_name"];
        $username = $memberResult[0]["user_name"];
        $email = $memberResult[0]["email"];
        $profile_pic = $memberResult[0]["img"];
    }
}
echo "<img src='$profile_pic'  width='70%'>";
echo $displayname;
echo $username;
echo $email;
?>
