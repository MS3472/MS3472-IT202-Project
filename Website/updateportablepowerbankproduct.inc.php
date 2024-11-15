<?php
// ms3472
// 10/19/2024
// IT202-MC
// Phase 3
// MS3472@njit.edu
?>
<h2>Update Product Information</h2>
<form action="index.php?content=changeportablepowerbankproduct" method="post">
    <table cellpadding="3" border="1">
        <tr>
            <td><label for="productID">Product ID:</label></td>
            <td><input type="text" id="productID" name="productID" size="4" ></td>
        </tr>
        <tr>
            <td><label for="productCode">Product Code:</label></td>
            <td><input type="text" id="productCode" name="productCode" size="20"></td>
        </tr>
        <tr>
            <td><label for="productName">Product Name:</label></td>
            <td><input type="text" id="productName" name="productName" size="50"></td>
        </tr>
        <tr>
            <td><label for="description">Description:</label></td>
            <td><input type="text" id="description" name="description" size="50"></td>
        </tr>
        <tr>
            <td><label for="model">Model:</label></td>
            <td><input type="text" id="model" name="model" size="20"></td>
        </tr>
        <tr>
            <td><label for="categoryID">Category ID:</label></td>
            <td><input type="text" id="categoryID" name="categoryID" size="4"></td>
        </tr>
        <tr>
            <td><label for="listPrice">List Price:</label></td>
            <td><input type="number" id="listPrice" name="listPrice" size="10"></td>
        </tr>
        <tr>
            <td><label for="wholesalePrice">Wholesale Price:</label></td>
            <td><input type="number" id="wholesalePrice" name="wholesalePrice" size="10"></td>
        </tr>
    </table>
    <br>
    <input type="submit" name="update" value="Update Product">
    <input type="submit" name="cancel" value="Cancel">
</form>
