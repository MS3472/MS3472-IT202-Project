<?php
// ms3472
// 10/19/2024
// IT202-MC
// Phase 2
// MS3472@njit.edu
?>

<?php
// include("portablepowebankcategory.php");

if (isset($_SESSION['login'])) {
    
    $categoryID = $_POST['categoryID'] ?? '';
    $categoryCode = $_POST['categoryCode'] ?? '';
    $categoryName = $_POST['categoryName'] ?? '';
    $shelfNum = $_POST['shelfNum'] ?? '';

    if (trim($categoryID) == '' || !is_numeric($categoryID)) {
        echo "<h2>Sorry, you must enter a valid category ID number</h2>\n"; 
    } 
    elseif (trim($shelfNum) == '' || strlen($shelfNum) > 5) {
        echo "<h2>Sorry, you must enter a valid shelf number (max 5 characters)</h2>\n";
    } 
    else {
        $category = new Category($categoryID, $categoryCode, $categoryName, $shelfNum);
        $result = $category->saveCategory();

        if ($result) {
            echo "<h2>New Category #$categoryID successfully added</h2>\n";
            echo "<h2>$category</h2>\n";
        } else {
            echo "<h2>Sorry, there was a problem adding that category</h2>\n";
        }
    }
} else {
    echo "<h2>Please log in first</h2>\n";
}
?>
