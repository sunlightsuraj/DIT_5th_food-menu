<?php
ini_set("display_errors", 1);
require("./database/db.php");
require_once("./services/category.service.php");

$categoryService = new CategoryService();

if (!isset($_POST['title'])) {
	die("Invalid title value.");
}

$id = $_POST['id'];
$title = $_POST['title'];

$res = $categoryService->updateCategory($id, $title);

header("Location: /portal.html?success=$res");