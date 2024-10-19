<?php
//ms3472
//10/19/2024
//IT202-MC
//Phase 2
//MS3472@njit.edus
include("portablepowerbankproduct.php");

if (!isset($_GET['productID']) || empty($_GET['productID'])) {
    echo "<h2>Error: Missing or invalid product ID.</h2>\n";
    exit;
}

$productID = $_GET['productID'];

$product = Item::findItem($productID);

if ($product === NULL) {
    echo "<h2>Product with ID $productID not found.</h2>\n";
    exit;
}

$result = $product->removeItem();

if ($result) {
    echo "<h2>Product $productID successfully removed.</h2>\n";
} else {
    echo "<h2>Problem removing product $productID.</h2>\n";
}
?>
