<?php


class Album extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function input() {
		
		$album_name = $_POST['album_name'];
		$album_text = $_POST['album_text'];
		$photo_id = $_POST['photo_id'];

		$sql = "INSERT INTO tb_album (album_name, album_text, photo_id) VALUES
										(:album_name, :album_text, :photo_id)";

		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":album_name", $album_name);
		$stmt->bindParam(":album_text", $album_text);
		$stmt->bindParam(":photo_id", $photo_id);
		$stmt->execute();

		return false;
	}

	public function tampil()
	{
		$sql = "SELECT * FROM tb_album";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];

		while ($row = $stmt->fetch()) {
			$data[] = $row;
		}

		return $data;
	}

	public function edit($id)
	{
		$sql = "SELECT * FROM tb_album WHERE album_id=:album_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":album_id", $id);
		$stmt->execute();

		$row = $stmt->fetch();

		return $row;
	}

	public function update()
	{
		$album_name = $_POST['album_name'];
		$album_text = $_POST['album_text'];
		$photo_id = $_POST['photo_id'];
		$id = $_POST['album_id'];

		$sql = "UPDATE tb_album SET album_name=:album_name, album_text=:album_text, 
		photo_id=:photo_id WHERE album_id=:album_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":album_name", $album_name);
		$stmt->bindParam(":album_text", $album_text);
		$stmt->bindParam(":photo_id", $photo_id);
		$stmt->bindParam(":album_id", $id);

		$stmt->execute();

		return false;
	}

	public function delete($id)
	{
		
		$sql = "DELETE FROM tb_album WHERE album_id=:album_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":album_id", $id);
		$stmt->execute();

		return false;
	}
}