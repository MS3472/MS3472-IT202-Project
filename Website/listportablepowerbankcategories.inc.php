<?php
//ms3472
//10/19/2024
//IT202-MC
//Phase 2
//MS3472@njit.edu
?>
<h2>Select Category</h2>
<form name="category" method="post">
   <select name="categoryID" size="20">
    <?php
    // include("portablepowebankcategory.php");
    $categories = Category::getCategories();

    if ($categories) {
        foreach($categories as $category) {
            $categoryID = $category->categoryID;
            $name = $categoryID . " - " . $category->categoryCode . ", " . $category->categoryName . " , Shelf: " . $category->shelfNum;
            echo "<option value=\"$categoryID\">$name</option>\n";
        }
    } else {
        echo "<option disabled>No categories found</option>";
    }
    ?>
   </select>
</form>
