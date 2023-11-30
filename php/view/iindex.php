<?php

$mysqli = new mysqli('db', 'USER', 'PASS', 'php-app');

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['toggle_update'])) {
        $status = $_POST['status'];
        $update = $mysqli->prepare("UPDATE `registered_users` SET `pay` = ? WHERE `id` = 1 LIMIT 1;");
        $update->bind_param('s', $status);
        $update->execute();
        echo json_encode($_POST);
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['toggle_select'])) {
        $select = $mysqli->prepare("SELECT `pay` FROM `registered_users` WHERE `id` = 1 LIMIT 1;");
        $select->execute();
        $select->bind_result($pay);
        $select->fetch();
        echo json_encode($pay);
    }
} else {
    echo json_encode(array());
}

$mysqli->close();
