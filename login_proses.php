<?php

include_once "app/Controller.php";
include_once "app/Login.php";

$login = new Login();

if ($_POST['tlogin']) {
	$login->login();
	header("location:index.php");
}