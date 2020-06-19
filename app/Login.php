<?php


class Login extends Controller {

	public function __construct() {
		parent:: __construct();
		session_start();
	}

	public function login()
	{
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM tb_user WHERE  username = :username AND password = :password";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":username", $username);
		$stmt->bindParam(":password", $password);
		$stmt->execute();

		$data = $stmt->fetch();

		if ($stmt->rowCount() > 0){
			$_SESSION['username'] = $username;
			header("location:index.php");
		} else {
			echo "Gagal Masuk";
		}
	}
}