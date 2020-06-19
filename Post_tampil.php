<center><h2>DAFTAR POST</h2></center>
<center>Tambah Post : <a href="index.php?page=Post_input">Tambah</a></center>
<?php

include "app/Post.php";

$post = new Post();
$rows = $post->tampil();

?>

<table>
	<table width="400px" border="2" cellpadding="10" cellspacing="10" bgcolor="#778899" align="center">
		<tr>
			<td>ID</td>
			<td>POST DATE</td>
			<td>POST SLUG</td>
			<td>POST TITLE</td>
			<td>POST TEXT</td>
			<td>ID KAT</td>
			<td>EDIT</td>
			<td>DELETE</td>
		</tr>
		<?php foreach ($rows as $row) { ?>
			<tr>
				<td><?php echo $row['post_id']; ?></td>
				<td><?php echo $row['post_date']; ?></td>
				<td><?php echo $row['slug']; ?></td>
				<td><?php echo $row['post_judul']; ?></td>
				<td><?php echo $row['post_text']; ?></td>
				<td><?php echo $row['cat_id']; ?></td>
				<td><a href="index.php?page=Post_edit&id=<?php echo $row['post_id']; ?>">Edit</a></td>
				<td><a href="index.php?page=Post_proses&delete-id=<?php echo $row['post_id']; ?>">Delete</a></td>
			</tr>
		<?php } ?>
</table>