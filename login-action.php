<?php
namespace Php;

use \Php\Member;
if (! empty($_POST["login"])) {
    session_start();
    $username = filter_var($_POST["user_name"], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
    require_once (__DIR__ . "/class/Member.php");
    
				// Username is stored as cookie for 10 years as
				// 10years * 365days * 24hrs * 60mins * 60secs
				setcookie("user", $username, time() +
									(10 * 365 * 24 * 60 * 60));

				// Password is stored as cookie for 10 years as
				// 10years * 365days * 24hrs * 60mins * 60secs
				setcookie("password", $password, time() +
									(10 * 365 * 24 * 60 * 60));
    $member = new Member();
    $isLoggedIn = $member->processLogin($username, $password);
    if (! $isLoggedIn) {
        $_SESSION["errorMessage"] = "Invalid Credentials";
    }
    header("Location: ./index.php");
    exit();
}