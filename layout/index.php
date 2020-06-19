<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas-1 Blog Sefty</title>
	<link rel="stylesheet" type="text/css" href="layout/assets/css/style.css">
</head>
<body>
	<div class="container">
		<div class="header">
			<center><img src="layout/assets/images/header.jpg"></center>
		</div>

		<center><div class="menu">
			<a href="index.php">Beranda</a>
			<a href="index.php?page=Category_tampil">Kategori</a>
			<a href="index.php?page=Post_tampil">Post</a>
			<a href="index.php?page=Photo_tampil">Photo</a>
			<a href="index.php?page=Album_tampil">Album</a>
			
			
		</div></center>

		<div class="main">

			<?php

			if (isset($_GET['page'])) {
				include $_GET['page'] . ".php";
			} else {
				include "main.php";
			}
			?>
		</div>

		<div class="footer">
			<center>Copyright by Sefty</center>
		</div>
	</div>
</body>
</html>