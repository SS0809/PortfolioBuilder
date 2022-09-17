<?php 

$command = escapeshellcmd('file.py');
$output = shell_exec($command);
echo $output;

?>
