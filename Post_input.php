<center><h2>TAMBAH POST</h2></center>
<form method="POST" action="Post_proses.php">
	<table width="400px" border="2" cellpadding="10" cellspacing="10" bgcolor="#778899" align="center">
		<tr>
			<td>POST DATE</td>
			<td><input type="date" name="post_date"></td>
		</tr>
		<tr>
			<td>POST SLUG</td>
			<td><input type="text" name="slug"></td>
		</tr>
		<tr>
			<td>POST TITLE</td>
			<td><input type="text" name="judul"></td>
		</tr>
		<tr>
			<td>POST TEXT</td>
			<td><textarea name="post_text"></textarea></td>
		</tr>
		<tr>
			<td>ID CAT</td>
			<td><input type="text" name="cat_id"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-simpan" value="SIMPAN"></td>
		</tr>
	</table>
</form>