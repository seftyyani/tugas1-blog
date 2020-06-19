<?php

include "app/Album.php";

$id = $_GET['id'];

$album = new Album();
$row = $album->edit($id);

?>

<center><h2>EDIT ALBUM</h2></center>
<form method="POST" action="Album_proses.php">
	<input type="hidden" name="album_id" value="<?php echo $id; ?>">
	<table width="400px" border="2" cellpadding="10" cellspacing="10" bgcolor="#778899" align="center">
		<tr>
			<td>NAMA ALBUM</td>
			<td><input type="text" name="album_name" value="<?php echo $row['album_name']; ?>"></td>
		</tr>
		<tr>
			<td>TEXT</td>
			<td><textarea name="album_text"><?php echo $row['album_text']; ?></textarea></td>
		</tr>
		<tr>
			<td>ID PHOTO</td>
			<td><input type="text" name="photo_id" value="<?php echo $row['photo_id']; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-edit" value="UPDATE"></td>
		</tr>
	</table>
</form>