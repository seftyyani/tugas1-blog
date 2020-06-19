<center><h2>DAFTAR ALBUM</h2></center>
<center>Tambah Album : <a href="index.php?page=Album_input">Tambah</a></center>
<?php

include "app/Album.php";

$album = new Album();
$rows = $album->tampil();

?>

<table>
	<table width="400px" border="2" cellpadding="10" cellspacing="10" bgcolor="#778899" align="center">
		<tr>
			<td>ID</td>
			<td>NAMA ALBUM</td>
			<td>TENTANG ALBUM</td>
			<td>ID PHOTO</td>
			<td>EDIT</td>
			<td>DELETE</td>
		</tr>
		<?php foreach ($rows as $row) { ?>
			<tr>
				<td><?php echo $row['album_id']; ?></td>
				<td><?php echo $row['album_name']; ?></td>
				<td><?php echo $row['album_text']; ?></td>
				<td><?php echo $row['photo_id']; ?></td>
				<td><a href="index.php?page=Album_edit&id=<?php echo $row['album_id']; ?>">Edit</a></td>
				<td><a href="index.php?page=Album_proses&delete-id=<?php echo $row['album_id']; ?>">Delete</a></td>
			</tr>
		<?php } ?>
</table>