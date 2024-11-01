<h2>Enter New Item Information</h2>
<form name="newitem" action="index.php" method="post">
   <table cellpadding="1" border="0">
       <tr>
           <td>Product ID:</td>
           <td><input type="text" name="productID" size="4"></td>
       </tr>
       <tr>
           <td>Product Code:</td>
           <td><input type="text" name="productCode" size="20"></td>
       </tr>
       <tr>
           <td>Product Name:</td>
           <td><input type="text" name="productName" size="50"></td>
       </tr>
       <tr>
           <td>Description:</td>
           <td><input type="text" name="description" size="50"></td>
       </tr>
       <tr>
           <td>Model:</td>
           <td><input type="text" name="model" size="20"></td>
       </tr>
       <tr>
           <td>Category ID:</td>
           <td><input type="text" name="categoryID" size="4"></td>
       </tr>
       <tr>
           <td>List Price:</td>
           <td><input type="text" name="listPrice" size="10"></td>
       </tr>
       <tr>
           <td>Wholesale Price:</td>
           <td><input type="text" name="wholesalePrice" size="10"></td>
       </tr>
   </table><br>
   <input type="submit" value="Submit New Item">
   <input type="hidden" name="content" value="addportablepowerbankproduct">
</form>
