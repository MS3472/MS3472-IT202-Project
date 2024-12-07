<?php
//ms3472
//10/19/2024
//IT202-MC
//Phase 2
//MS3472@njit.edu
//error_log("\$_GET " . print_r($_GET, true));
//include("portablepowebankcategory.php");
if (isset($_SESSION['login'])) {
$categoryID = $_POST['categoryID'];
$category = Category::findCategory($categoryID);
$result = $category->removeCategory();
if ($result)
   echo "<h2>Category $categoryID removed</h2>\n";
else
   echo "<h2>Sorry, problem removing category $categoryID</h2>\n";
} else {
   echo "<H2>Please login first</h2>\n";
}


?>
