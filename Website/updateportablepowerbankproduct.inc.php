<?php
// ms3472
// 10/19/2024
// IT202-MC
// Phase 3
// MS3472@njit.edu

require_once('database.php'); // Ensure the database connection is available
require_once('portablepowerbankproduct.php'); // Ensure the product class is available

// Fetch productID from the query string
$productID = $_GET['productID'] ?? null;

if (!$productID || !is_numeric($productID)) {
    echo "<h2>Invalid or missing product ID. Please select a valid product to update.</h2>";
    exit;
}

// Fetch the product details
$product = Item::findItem($productID);

if (!$product) {
    echo "<h2>Error: Product not found for ID $productID.</h2>";
    exit;
}
?>

<h2>Update Product Information</h2>
<form action="index.php?content=changeportablepowerbankproduct" method="post">
    <table cellpadding="3" border="1">
        <tr>
            <td><label for="productID">Product ID:</label></td>
            <td><input type="text" id="productID" name="productID" size="4" readonly value="<?php echo htmlspecialchars($product->productID); ?>"></td>
        </tr>
        <tr>
            <td><label for="productCode">Product Code:</label></td>
            <td><input type="text" id="productCode" name="productCode" size="20" value="<?php echo htmlspecialchars($product->productCode); ?>"></td>
        </tr>
        <tr>
            <td><label for="productName">Product Name:</label></td>
            <td><input type="text" id="productName" name="productName" size="50" value="<?php echo htmlspecialchars($product->productName); ?>"></td>
        </tr>
        <tr>
            <td><label for="description">Description:</label></td>
            <td><input type="text" id="description" name="description" size="50" value="<?php echo htmlspecialchars($product->description); ?>"></td>
        </tr>
        <tr>
            <td><label for="model">Model:</label></td>
            <td><input type="text" id="model" name="model" size="20" value="<?php echo htmlspecialchars($product->model); ?>"></td>
        </tr>
        <tr>
            <td><label for="categoryID">Category ID:</label></td>
            <td><input type="text" id="categoryID" name="categoryID" size="4" value="<?php echo htmlspecialchars($product->categoryID); ?>"></td>
        </tr>
        <tr>
            <td><label for="listPrice">List Price:</label></td>
            <td><input type="number" id="listPrice" name="listPrice" size="10" value="<?php echo htmlspecialchars($product->listPrice); ?>"></td>
        </tr>
        <tr>
            <td><label for="wholesalePrice">Wholesale Price:</label></td>
            <td><input type="number" id="wholesalePrice" name="wholesalePrice" size="10" value="<?php echo htmlspecialchars($product->wholesalePrice); ?>"></td>
        </tr>
    </table>
    <br>
    <input type="submit" name="update" value="Update Product">
    <input type="submit" name="cancel" value="Cancel">
</form>
