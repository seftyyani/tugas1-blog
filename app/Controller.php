<?php

class Controller {

	protected object $db;

	public function __construct() {

		try {

			$this->db = new PDO ("mysql:host=localhost;dbname=db_utspop", "root", "");
		} catch (Exception $e) {
			die ("eror!" . $e->getMessage());
		}
	}
}