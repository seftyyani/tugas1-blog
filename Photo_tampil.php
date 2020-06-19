<center><h2>DAFTAR PHOTO</h2></center>
<center>Tambah Photo : <a href="index.php?page=Photo_input">Tambah</a></center>
<?php

include "app/Photo.php";

$photo = new Photo();
$rows = $photo->tampil();

?>

<table>
	<table width="400px" border="2" cellpadding="10" cellspacing="10" bgcolor="#778899" align="center">
		<tr>
			<td>ID</td>
			<td>PHOTO DATE</td>
			<td>PHOTO TITLE</td>
			<td>PHOTO TEXT</td>
			<td>ID POST</td>
			<td>EDIT</td>
			<td>DELETE</td>
		</tr>
		<?php foreach ($rows as $row) { ?>
			<tr>
				<td><?php echo $row['photo_id']; ?></td>
				<td><?php echo $row['photo_date']; ?></td>
				<td><?php echo $row['photo_title']; ?></td>
				<td><?php echo $row['photo_text']; ?></td>
				<td><?php echo $row['post_id']; ?></td>
				<td><a href="index.php?page=Photo_edit&id=<?php echo $row['photo_id']; ?>">Edit</a></td>
				<td><a href="index.php?page=Photo_proses&delete-id=<?php echo $row['photo_id']; ?>">Delete</a></td>
			</tr>
		<?php } ?>
</table>