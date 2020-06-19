<?php

include "app/Photo.php";

$id = $_GET['id'];

$photo = new Photo();
$row = $photo->edit($id);

?>

<center><h2>EDIT PHOTO</h2></center>
<form method="POST" action="Photo_proses.php">
	<input type="hidden" name="photo_id" value="<?php echo $id; ?>">
	<table width="400px" border="2" cellpadding="10" cellspacing="10" bgcolor="#778899" align="center">
		<tr>
			<td>PHOTO DATE</td>
			<td><input type="date" name="photo_date" value="<?php echo $row['photo_date']; ?>"></td>
		</tr>
		<tr>
			<td>PHOTO TITLE</td>
			<td><input type="text" name="photo_title" value="<?php echo $row['photo_title']; ?>"></td>
		</tr>
		<tr>
			<td>PHOTO TEXT</td>
			<td><textarea name="photo_text"><?php echo $row['photo_text']; ?></textarea></td>
		</tr>
		<tr>
			<td>ID POST</td>
			<td><input type="text" name="post_id" value="<?php echo $row['post_id']; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-edit" value="UPDATE"></td>
		</tr>
	</table>
</form>