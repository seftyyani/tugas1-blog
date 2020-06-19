<?php

include "app/Post.php";

$id = $_GET['id'];

$post = new Post();
$row = $post->edit($id);

?>

<center><h2>EDIT POST</h2></center>
<form method="POST" action="Post_proses.php">
	<input type="hidden" name="post_id" value="<?php echo $id; ?>">
	<table width="400px" border="2" cellpadding="10" cellspacing="10" bgcolor="#778899" align="center">
		<tr>
			<td>POST DATE</td>
			<td><input type="date" name="post_date" value="<?php echo $row['post_date']; ?>"></td>
		</tr>
		<tr>
			<td>POST SLUG</td>
			<td><input type="text" name="slug" value="<?php echo $row['slug']; ?>"></td>
		</tr>
		<tr>
			<td>POST TITLE</td>
			<td><input type="text" name="judul" value="<?php echo $row['judul']; ?>"></td>
		</tr>
		<tr>
			<td>POST TEXT</td>
			<td><textarea name="post_text"><?php echo $row['post_text']; ?></textarea></td>
		</tr>
		<tr>
			<td>ID CATEGORY</td>
			<td><input type="text" name="cat_id" value="<?php echo $row['cat_id']; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-edit" value="UPDATE"></td>
		</tr>
	</table>
</form>