<?php
session_start();

if (!isset($_SESSION['login'])) {
    exit; 
}
ob_start();
include("portablepowerbankcategory.php");
include("portablepowerbankproduct.php");
$totalCategories = Category::getTotalCategories();
$totalItems = Item::getTotalItems();
$listpricetotal = Item::getTotalListPrice();
$totalWholesalePrice = Item::getTotalWholesalePrice();
$doc = new DOMDocument("1.0");
$inventory = $doc->createElement("inventory");
$inventory = $doc->appendChild($inventory);
$categories = $doc->createElement("categories", $totalCategories);
$categories = $inventory->appendChild($categories);

$items = $doc->createElement("items", $totalItems);
$items = $inventory->appendChild($items);

$listprice = $doc->createElement("listpricetotal", $listpricetotal);
$listprice = $inventory->appendChild($listprice);

$wholesaleprice = $doc->createElement("wholesaletotal", $totalWholesalePrice);
$wholesaleprice = $inventory->appendChild($wholesaleprice);

$output = $doc->saveXML();
header("Content-type: application/xml");
ob_end_clean();
echo $output;
?>
