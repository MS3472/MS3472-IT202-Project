<?php
//ms3472
//10/19/2024
//IT202-MC
//Phase 2
//MS3472@njit.edu
?>
<script language="javascript">
   function listbox_dblclick() {
       document.category.displaycategory.click();
   }
   function button_click(target) {
       var userConfirmed = true;
       if (target == 1) {
           userConfirmed = confirm("Are you sure you want to remove this category?");
       }
       if (userConfirmed) {
           if (target == 0) category.action = "index.php?content=displayportablepowerbankcategory";
           if (target == 1) category.action = "index.php?content=removeportablepowerbankcategory";
           if (target == 2) category.action = "index.php?content=updatecategory";
       } else {
           alert("Action canceled.");
       }
   }
</script>

<h2>Select Category</h2>
<form name="category" method="post">
   <select ondblclick="listbox_dblclick()" name="categoryID" size="20">
       <?php
       // include("portablepowebankcategory.php");
       $categories = Category::getCategories();

       if ($categories) {
           foreach ($categories as $category) {
               $categoryID = $category->categoryID;
               $name = $categoryID . " - " . $category->categoryCode . ", " . $category->categoryName . " , Shelf: " . $category->shelfNum;
               echo "<option value=\"$categoryID\">$name</option>\n";
           }
       } else {
           echo "<option disabled>No categories found</option>";
       }
       ?>
   </select>
   <br>
   <input type="submit" onClick="button_click(0)" name="displaycategory" value="View Category">
   <input type="submit" onClick="button_click(1)" name="deletecategory" value="Delete Category">
   <input type="submit" onClick="button_click(2)" name="answer" value="Update Category">
</form>
