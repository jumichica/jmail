<?php
$opened_log = fopen("opened.log", "a+") or die("Unable to open file!");
$unix_time=time();
$time = date("Y-m-d",$unix_time);
$message = "Correo open at $time.\n";
fwrite($opened_log, $message);
fclose($opened_log);
echo"Log registered.";