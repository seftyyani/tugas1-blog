<center><h2>DAFTAR CATEGORY</h2></center>
<center>Tambah Category : <a href="index.php?page=Category_input">Tambah</a></center>
<?php

include "app/Category.php";

$cat = new Category();
$rows = $cat->tampil();

?>

<table>
	<table width="400px" border="2" cellpadding="10" cellspacing="10" bgcolor="#778899" align="center">
		<tr>
			<td>ID</td>
			<td>NAMA KATEGORI</td>
			<td>PENJELASAN</td>
			<td>EDIT</td>
			<td>DELETE</td>
		</tr>
		<?php foreach ($rows as $row) { ?>
			<tr>
				<td><?php echo $row['cat_id']; ?></td>
				<td><?php echo $row['cat_name']; ?></td>
				<td><?php echo $row['cat_text']; ?></td>
				<td><a href="index.php?page=Category_edit&id=<?php echo $row['cat_id']; ?>">Edit</a></td>
				<td><a href="index.php?page=Category_proses&delete-id=<?php echo $row['cat_id']; ?>">Delete</a></td>
			</tr>
		<?php } ?>
</table>