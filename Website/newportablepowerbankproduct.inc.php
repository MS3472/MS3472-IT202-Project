<?php
// ms3472
// 10/19/2024
// IT202-MC
// Phase 3
// MS3472@njit.edu
?>

<h2>Enter New Item Information</h2>
<form name="newitem" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>Product ID:</td>
           <td><input type="text" name="productID" size="4" required></td>
       </tr>
       <tr>
           <td>Product Code:</td>
           <td><input type="text" name="productCode" size="20" required></td>
       </tr>
       <tr>
           <td>Product Name:</td>
           <td><input type="text" name="productName" size="50" required></td>
       </tr>
       <tr>
           <td>Description:</td>
           <td><input type="text" name="description" size="55" required></td>
       </tr>
       <tr>
           <td>Model:</td>
           <td><input type="text" name="model" size="20" required></td>
       </tr>
       <tr>
           <td>Category ID:</td>
           <td><input type="text" name="categoryID" size="4" required></td>
       </tr>
       <tr>
           <td>List Price:</td>
           <td><input type="number" name="listPrice" step="0.01" min="0" max="10000" required></td>
       </tr>
       <tr>
           <td>Wholesale Price:</td>
           <td><input type="number" name="wholesalePrice" step="0.01" min="0" max="10000" required></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Item">
   <input type="hidden" name="content" value="addportablepowerbankproduct">
</form>