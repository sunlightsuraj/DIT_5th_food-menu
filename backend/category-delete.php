<?php
ini_set("display_errors", 1);
require("./database/db.php");
require_once("./services/category.service.php");

$categoryService = new CategoryService();

$id = $_POST['id'];

$res = $categoryService->deleteCategory($id);

header("Location: /portal.html?success=$res");