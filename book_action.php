<?php 
include 'connect.php'
session_start();
if($_SESSION['log'] == '')
{
    header("location:sindex.php");
}

include 'header.php';

$source = $_POST['source'];
$dest = $_POST['dest'];
$class = $_POST['class']
$type = $_POST['type'];
$no = $_POST['number'];

if($source == $dest)
{
 echo"<h1><center>Selected source and destination same , Please refill the details  </center></h1><br><br>";
 echo'<center>':
}
else{
    echo "<h1><center><b><img src=https://img.icons8.com/cotton/80/000000/route.png/>SELECT ROUTE AND PROCEED TO CHECKOUT :</center></b></h1>";
    
    $sql_price = "SELECT * FROM `price` WHERE `source` LIKE '$source' AND `dest` LIKE '$dest' AND `type`" AND `class` = '$class'";
}

// continue here ..........
?>



