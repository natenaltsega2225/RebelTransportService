<?php
$hostname  = 'localhost';
$username = 'root';
$password='';
$dbname = 'medicaltransport';
$connect =  mysqli_connect($hostname , $username , $password ,$dbname) or die("Error Connecting");
?>