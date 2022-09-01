<?php
session_start();
if(!empty($_SESSION["userId"])) {        
    require_once './view/dashboardnew.php';
} else {   
    require_once './view/login-form.php';
}
?>
