<center><h2>TAMBAH ALBUM</h2></center>
<form method="POST" action="Album_proses.php">
	<table width="400px" border="2" cellpadding="10" cellspacing="10" bgcolor="#778899" align="center">
		<tr>
			<td>NAMA ALBUM</td>
			<td><input type="text" name="album_name"></td>
		</tr>
		<tr>
			<td>TEXT</td>
			<td><textarea name="album_text"></textarea></td>
		</tr>
		<tr>
			<td>ID PHOTO</td>
			<td><input type="text" name="photo_id"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-simpan" value="SIMPAN"></td>
		</tr>
	</table>
</form>