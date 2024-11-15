<?php
// ms3472
// 10/19/2024
// IT202-MC
// Phase 3
// MS3472@njit.edu
?>

<h2>Enter New Category Information</h2>
<form name="newcategory" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>Category ID:</td>
           <td><input type="text" name="categoryID" size="10" required></td>
       </tr>
       <tr>
           <td>Category Code:</td>
           <td><input type="text" name="categoryCode" size="10" required></td>
       </tr>
       <tr>
           <td>Category Name:</td>
           <td><input type="text" name="categoryName" size="50" required></td>
       </tr>
       <tr>
           <td>Shelf Number:</td>
           <td><input type="text" name="shelfNum" size="5" required></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Category">
   <input type="hidden" name="content" value="addportablepowerbankcategory">
</form>