<?php
//ms3472
//10/19/2024
//IT202-MC
//Phase 2
//MS3472@njit.edu
include("portablepowebankcategory.php");

if (isset($_GET['categoryID']) && isset($_GET['categoryCode']) && isset($_GET['categoryName']) && isset($_GET['shelfNum'])) {
    $categoryID = $_GET['categoryID'];
    $category = Category::findCategory($categoryID);

    if ($category) {
        $category->categoryCode = $_GET['categoryCode'];
        $category->categoryName = $_GET['categoryName'];
        $category->shelfNum = $_GET['shelfNum']; 
        $result = $category->updateCategory();

        if ($result) {
            echo "<h2>Category $categoryID updated successfully</h2>\n";
        } else {
            echo "<h2>Problem updating category $categoryID</h2>\n";
        }
    } else {
        echo "<h2>Category $categoryID not found</h2>\n";
    }
} else {
    echo "<h2>Invalid parameters. Please provide categoryID, categoryCode, categoryName, and shelfNum.</h2>\n";
}
?>
