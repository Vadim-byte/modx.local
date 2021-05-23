<?php

$part_ip = "127.0.0.1";
$part2_name = "root";
$part3_p = "";
$part4_db = "ITdata";

$induction = mysqli_connect ($part_ip, $part2_name, $part3_p, part4_db);

if ($induction == false)
{
echo "Ошибка подключения";
}


 
?>