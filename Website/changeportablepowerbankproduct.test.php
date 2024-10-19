<?php
include("portablepowerbankproduct.php");

$productID = $_GET['productID'];

$item = Item::findItem($productID);

if ($item === NULL) {
    echo "<h2>Item with ID $productID not found.</h2>\n";
    exit;
}

$item->productCode = $_GET['productCode'];  
$item->productName = $_GET['productName'];
$item->description = $_GET['description'];
$item->model = $_GET['model'];
$item->categoryID = $_GET['categoryID'];
$item->listPrice = $_GET['listPrice'];
$item->wholesalePrice = $_GET['wholesalePrice'];

$result = $item->updateItem();

if ($result) {
   echo "<h2>Item $productID updated successfully.</h2>\n";
} else {
   echo "<h2>Problem updating item $productID. Error: " . $db->error . "</h2>\n";
}
?>

