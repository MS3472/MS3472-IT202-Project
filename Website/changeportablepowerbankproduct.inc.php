<?php
// ms3472
// 10/19/2024
// IT202-MC
// Phase 2
// MS3472@njit.edu
?>

<?php
// include("portablepowerbankproduct.php");

if (isset($_SESSION['login'])) {
    $productID = $_POST['productID'] ?? null;
    
    if (isset($_POST['update'])) {
        $item = Item::findItem($productID);

        if ($item === NULL) {
            echo "<h2>Item with ID $productID not found.</h2>\n";
        } else {
            $item->productCode = $_POST['productCode'];
            $item->productName = $_POST['productName'];
            $item->description = $_POST['description'];
            $item->model = $_POST['model'];
            $item->categoryID = $_POST['categoryID'];
            $item->listPrice = $_POST['listPrice'];
            $item->wholesalePrice = $_POST['wholesalePrice'];

            $result = $item->updateItem();

            if ($result) {
                echo "<h2>Item $productID updated successfully.</h2>\n";
            } else {
                echo "<h2>Problem updating item $productID. Error: " . $db->error . "</h2>\n";
            }
        }
    } elseif (isset($_POST['cancel'])) {
        echo "<h2>Update Canceled for item $productID</h2>\n";
    } else {
        echo "<h2>No action specified.</h2>\n";
    }
} else {
    echo "<h2>Please login first</h2>\n";
}
?>
