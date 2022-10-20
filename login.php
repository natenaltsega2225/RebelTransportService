<?php
// header file is included here
include 'inc/header.php';

//user file is included here
include 'lib/user.php';
$user = new user;

//if user logged in redirect user to index page
session:: userLogin();
if($_SERVER['REQUEST_METHOD'] == 'POST' )





?>

