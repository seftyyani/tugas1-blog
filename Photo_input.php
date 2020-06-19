<center><h2>TAMBAH PHOTO</h2></center>
<form method="POST" action="Photo_proses.php">
	<table width="400px" border="2" cellpadding="10" cellspacing="10" bgcolor="#778899" align="center">
		<tr>
			<td>PHOTO DATE</td>
			<td><input type="date" name="photo_date"></td>
		</tr>
		<tr>
			<td>PHOTO TITLE</td>
			<td><input type="text" name="photo_title"></td>
		</tr>
		<tr>
			<td>PHOTO TEXT</td>
			<td><textarea name="photo_text"></textarea></td>
		</tr>
		<tr>
			<td>ID POST</td>
			<td><input type="text" name="post_id"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-simpan" value="SIMPAN"></td>
		</tr>
	</table>
</form>