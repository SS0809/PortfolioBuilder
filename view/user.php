<?php
namespace Php;
//error_reporting(0);
session_start();
use \Php\Member; 
include '../dbconnect.php';
$userbrowser;
if (! empty($_SESSION["userId"])) {
    require_once __DIR__ . './../class/Member.php';
    $member = new Member();
    $memberResult = $member->getMemberById($_SESSION["userId"]);
    if(!empty($memberResult[0]["display_name"])) {
        $username = $memberResult[0]["user_name"];
        $user_browser = $memberResult[0]["user_browser"];
        $points = ucwords($memberResult[0]["points"]);
        $profile_pic = $memberResult[0]["filename"];
    } else {
        $username = $memberResult[0]["user_name"];
        $user_browser = $memberResult[0]["user_browser"];
        $points = $memberResult[0]["points"];
                $profile_pic = $memberResult[0]["filename"];
    }
$userbrowser= $user_browser;
}

/*
$serialized_array = serialize($array); 
var_dump($serialized_array); // gives back a string, perfectly for db saving!
//echo $serialized_array ;
var_dump($unserialized_array); // gives back the array again
//echo $unserialized_array ;
//$array=array("red","green");
*/
//echo $userbrowser ;
if ( $userbrowser == "")
{

$array = array($_SERVER['HTTP_USER_AGENT']);
$current= $_SERVER['HTTP_USER_AGENT'];


	echo "yes";
	$serialized_array = serialize($array); 
   $sql = "UPDATE registered_users SET user_browser='$serialized_array' where user_name = '$username';";
   $result = mysqli_query($conn, $sql); 

}

else
{
$current= $_SERVER['HTTP_USER_AGENT'];
$unserialized_array = unserialize($userbrowser); 



if( array_search($current,$unserialized_array)==false)
{
	array_push($unserialized_array,$current);
	$serialized_array = serialize($unserialized_array); 
  $sql = "UPDATE registered_users SET user_browser='$serialized_array' where user_name = '$username';";
   $result = mysqli_query($conn, $sql); 
	echo "yes";
	echo $current;
}

else
{echo "no";
	echo $current;
}


}




























?>
