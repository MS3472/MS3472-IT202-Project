<?php
// ms3472
// 10/19/2024
// IT202-MC
// Phase 3
// MS3472@njit.edu

require_once('portablepowerbankproduct.php');

// Check if productID is provided
if (!isset($_GET['productID']) && !isset($_POST['productID'])) {
    echo "<h2>Invalid or missing product ID. Please provide a valid product to view.</h2>";
    exit;
}

// Get the product ID from GET or POST
$productID = isset($_GET['productID']) ? $_GET['productID'] : $_POST['productID'];


$product = Item::findItem($productID);

if ($product === NULL) {
    echo "<h2>Product not found.</h2>";
    exit;
}

echo "<h2>Product Details</h2>";
echo "<table border='1' cellpadding='10' style='border-collapse: collapse; width: 50%;'>";
echo "<tr><th>Field</th><th>Value</th></tr>";
echo "<tr><td>Product ID</td><td>" . htmlspecialchars($product->productID) . "</td></tr>";
echo "<tr><td>Product Code</td><td>" . htmlspecialchars($product->productCode) . "</td></tr>";
echo "<tr><td>Product Name</td><td>" . htmlspecialchars($product->productName) . "</td></tr>";
echo "<tr><td>List Price</td><td>$" . number_format($product->listPrice, 2) . "</td></tr>";
echo "<tr><td>Wholesale Price</td><td>$" . number_format($product->wholesalePrice, 2) . "</td></tr>";
echo "<tr><td>Description</td><td>" . nl2br(htmlspecialchars($product->description)) . "</td></tr>";
echo "</table>";

echo "<br><a href='index.php' style='text-decoration: none; color: blue;'>Back to Home</a>";
?>
