<?php
date_default_timezone_set("Asia/Calcutta");
$current_h = date('H');
$current_d = date('d');
$last_h  = '12';
$last_d  = '17';
if ($last_h - $current_h <=15 &&  $current_d - $last_d < 1 )
{
	echo "do nothing";
}
else if($last_h - $current_h >24 &&  $current_d - $last_d < 1 )
{
    echo "broke";
}
else 
{
	echo "increase";
}




?>