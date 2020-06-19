<?php


class Post extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function input() {
		
		$post_date = $_POST['post_date'];
		$slug = $_POST['slug'];
		$judul = $_POST['judul'];
		$post_text = $_POST['post_text'];
		$cat_id = $_POST['cat_id'];

		$sql = "INSERT INTO tb_post (post_date, slug, judul, post_text, cat_id) VALUES
										(:post_date, :slug, :judul, :post_text, :cat_id)";

		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":post_date", $post_date);
		$stmt->bindParam(":slug", $slug);
		$stmt->bindParam(":judul", $judul);
		$stmt->bindParam(":post_text", $post_text);
		$stmt->bindParam(":cat_id", $cat_id);
		$stmt->execute();

		return false;
	}

	public function tampil()
	{
		$sql = "SELECT * FROM tb_post";
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
		$sql = "SELECT * FROM tb_post WHERE post_id=:post_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":post_id", $id);
		$stmt->execute();

		$row = $stmt->fetch();

		return $row;
	}

	public function update()
	{
		$post_date = $_POST['post_date'];
		$slug = $_POST['slug'];
		$judul = $_POST['judul'];
		$post_text = $_POST['post_text'];
		$cat_id = $_POST['cat_id'];
		$id = $_POST['post_id'];

		$sql = "UPDATE tb_post SET post_date=:post_date, slug=:slug, judul=:judul, post_text=:post_text, 
		cat_id=:cat_id WHERE post_id=:post_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":post_date", $post_date);
		$stmt->bindParam(":slug", $slug);
		$stmt->bindParam(":judul", $judul);
		$stmt->bindParam(":post_text", $post_text);
		$stmt->bindParam(":cat_id", $cat_id);
		$stmt->bindParam(":post_id", $id);

		$stmt->execute();

		return false;
	}

	public function delete($id)
	{
		
		$sql = "DELETE FROM tb_post WHERE post_id=:post_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":post_id", $id);
		$stmt->execute();

		return false;
	}
}