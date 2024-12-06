<?php
ini_set("display_errors", 1);
require("./database/db.php");
require_once("./services/category.service.php");

$categoryService = new CategoryService();

if (!isset($_POST['title'])) {
	die("Invalid title value.");
}

$title = $_POST['title'];

$res = $categoryService->saveCategory($title);

header("Location: /portal.html?success=$res");