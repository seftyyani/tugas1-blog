<?php

include "app/Category.php";

$id = $_GET['id'];

$cat = new Category();
$row = $cat->edit($id);

?>

<center><h2>EDIT CATEGORY</h2></center>
<form method="POST" action="Category_proses.php">
	<input type="hidden" name="cat_id" value="<?php echo $id; ?>">
	<table width="400px" border="2" cellpadding="10" cellspacing="10" bgcolor="#778899" align="center">
		<tr>
			<td>NAMA CATEGORY</td>
			<td><input type="text" name="cat_name" value="<?php echo $row['cat_name']; ?>"></td>
		</tr>
		<tr>
			<td>TEXT</td>
			<td><textarea name="cat_text"><?php echo $row['cat_text']; ?></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-edit" value="UPDATE"></td>
		</tr>
	</table>
</form>