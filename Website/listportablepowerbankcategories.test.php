<?php
include("portablepowebankcategory.php");
$categories = Category::getCategories();

if ($categories) {
    foreach($categories as $category) {
        $categoryID = $category->categoryID;
        $name = $categoryID . " - " . $category->categoryCode . ", " . $category->categoryName . " , Shelf: " . $category->shelfNum;
        echo "$name<br>";
    }
} else {
    echo "<h2>No categories found.</h2>";
}
?>
