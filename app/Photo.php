<?php


class Photo extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function input() {
		
		$photo_date = $_POST['photo_date'];
		$photo_judul = $_POST['photo_title'];
		$photo_text = $_POST['photo_text'];
		$post_id = $_POST['post_id'];

		$sql = "INSERT INTO tb_photos (photo_date, photo_title, photo_text, post_id) VALUES
										(:photo_date, :photo_tittle, :photo_text, :post_id)";

		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":photo_date", $photo_date);
		$stmt->bindParam(":photo_title", $photo_title);
		$stmt->bindParam(":photo_text", $photo_text);
		$stmt->bindParam(":post_id", $post_id);
		$stmt->execute();

		return false;
	}

	public function tampil()
	{
		$sql = "SELECT * FROM tb_photos";
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
		$sql = "SELECT * FROM tb_photos WHERE photo_id=:photo_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":photo_id", $id);
		$stmt->execute();

		$row = $stmt->fetch();

		return $row;
	}

	public function update()
	{
		$photo_date = $_POST['photo_date'];
		$photo_judul = $_POST['photo_title'];
		$photo_text = $_POST['photo_text'];
		$post_id = $_POST['post_id'];
		$id = $_POST['photo_id'];

		$sql = "UPDATE tb_photos SET photo_date=:photo_date, photo_title=:photo_title, photo_text=:photo_text, 
		phost_id=:phost_id WHERE photo_id=:photo_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":photo_date", $photo_date);
		$stmt->bindParam(":photo_title", $photo_title);
		$stmt->bindParam(":photo_text", $photo_text);
		$stmt->bindParam(":post_id", $post_id);
		$stmt->bindParam(":photo_id", $id);

		$stmt->execute();

		return false;
	}

	public function delete($id)
	{
		
		$sql = "DELETE FROM tb_photos WHERE photo_id=:photo_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":photo_id", $id);
		$stmt->execute();

		return false;
	}
}