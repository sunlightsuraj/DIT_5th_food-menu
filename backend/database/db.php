<?php

class Database {
	private static $host = "localhost";
	private static $username = "root";
	private static $password = "";
	private static $database_name = "food_menu";

	private $conn = null;

	private static $db = null;

	function __construct()
	{
		if ($this->conn === null) {
			$this->conn = new mysqli(Database::$host, Database::$username, Database::$password, Database::$database_name);
		}
	}

	static function getDB() {
		if (Database::$db === null) {
			Database::$db = new Database();
		}

		return Database::$db;
	}

	public function getConnection() {
		return $this->conn;
	}
}
