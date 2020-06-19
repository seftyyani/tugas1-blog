<?php

include_once "app/Controller.php";
include_once "app/Photo.php";

$photo = new Photo();

if ($_POST['btn-simpan']) {
	$photo->input(); 
	header("location:index.php?page=Photo_tampil");
}

if ($_POST['btn-edit']) {
	$photo->update(); 
	header("location:index.php?page=Photo_tampil");
}

if ($_GET['delete-id']) {
	$photo->delete($_GET['delete-id']); 
	header("location:index.php?page=Photo_tampil");
}