<?php
$db = new PDO('mysql:host=remotemysql.com;dbname=IIVAjfeDkk; charset=utf8mb4', 'IIVAjfeDkk', 'zzrye8TbMy');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['toggle_update'])) {
        $update = $db->prepare("UPDATE `registered_users` SET `pay` = ? WHERE `id` = 1 LIMIT 1;");
        $update->execute([$_POST['status']]);
        echo json_encode($_POST);
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['toggle_select'])) {
        $select = $db->prepare("SELECT `pay` FROM `registered_users` WHERE `id` = 1 LIMIT 1;");
        $select->execute();
        echo json_encode($select->fetchColumn());
    }
} else {
    echo json_encode(array());
}