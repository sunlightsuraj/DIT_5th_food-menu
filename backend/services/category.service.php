<?php

class CategoryService {
	private $db;
	private $conn;

	function __construct()
	{
		$this->db = Database::getDB();
		$this->conn = $this->db->getConnection();
	}

	public function saveCategory($title) {
		$res = $this->conn->query("insert into categories(title) value('$title')");

		if ($res) {
			return $this->conn->insert_id;
		}
		return false;
	}

	public function selectCategories() {
		$query = $this->conn->query("select *from categories");
		$categories = array();

		if ($query && $query->num_rows) {
			while($row = $query->fetch_array()) {
				array_push($categories, $row);
			}
		}

		return $categories;
	}

	public function updateCategory($id, $title) {
		return $this->conn->query("update categories set title = '$title' where id = $id");
	}

	public function deleteCategory($id) {
		return $this->conn->query("delete from categories where id = $id");
	}
}