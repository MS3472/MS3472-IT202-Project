<?php
include("portablepowerbankproduct.php");
$items = Item::getItems();


if ($items === NULL || empty($items)) {
    echo "<h2>No products found.</h2>";
} else {
    
    foreach ($items as $item) {
        
        $productID = $item->productID;
        $productCode = $item->productCode;  
        $productName = $item->productName;
        $listPrice = number_format($item->listPrice, 2);  
        $wholesalePrice = number_format($item->wholesalePrice, 2); 
        $description = $item->description;
        $model = $item->model;
        $categoryID = $item->categoryID;

        $option = "ID: $productID | Code: $productCode | Name: $productName | List Price: $$listPrice";
        
        echo "$option<br>";
    }
}
?>
