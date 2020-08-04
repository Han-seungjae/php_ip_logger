<?php
$randomNum = mt_rand(1, 1000000);

//make log.txt next file open
$fp = fopen("$randomNum.txt" , "w");
$ip_address;
$ip_address = $_SERVER["REMOTE_ADDR"];

//Declare time as ppap
$ppap = date("Y-m-d H:i:s");

//Write IP,time 
fwrite($fp, "$ppap \n");
fwrite($fp, "$ip_address : IP ? \n");

//Close file!
fclose($fp);

echo "Good Game";
?>
