<?php
//ms3472
//10/19/2024
//IT202-MC
//Phase 2
//MS3472@njit.edu
include('portablepowerbankproduct.php');

if (!isset($_GET['productID']) || 
    !isset($_GET['productCode']) || 
    !isset($_GET['productName']) || 
    !isset($_GET['description']) || 
    !isset($_GET['model']) || 
    !isset($_GET['categoryID']) || 
    !isset($_GET['listPrice']) || 
    !isset($_GET['wholesalePrice'])) { 
    echo "<h2>Missing parameters. Please provide productID, productCode, productName, description, model, categoryID, listPrice, and wholesalePrice.</h2>\n";
    exit; 
}

$productID = $_GET['productID'];

if (trim($productID) === '' || !is_numeric($productID)) {
    echo "<h2>Sorry, you must enter a valid product ID number.</h2>\n";
    exit; 
}

$productCode = $_GET['productCode'];
$productName = $_GET['productName'];
$description = $_GET['description'];
$model = $_GET['model'];
$categoryID = $_GET['categoryID'];

$listPrice = $_GET['listPrice'];
if (!is_numeric($listPrice)) {
    echo "<h2>Error: List price must be a valid number.</h2>\n";
    exit; 
}

$wholesalePrice = $_GET['wholesalePrice'];
if (!is_numeric($wholesalePrice)) {
    echo "<h2>Error: Wholesale price must be a valid number.</h2>\n";
    exit;
}


$listPrice = (float)$listPrice;
$wholesalePrice = (float)$wholesalePrice;

$item = new Item(
    $productID,
    $productCode,
    $productName,
    $description,
    $model,
    $categoryID,
    $listPrice,
    $wholesalePrice
);

$result = $item->saveItem();
if ($result) {
    echo "<h2>New Product #$productID successfully added.</h2>\n";
} else {
    echo "<h2>Sorry, there was a problem adding that product. Please check if the product code already exists.</h2>\n";
}
?>
