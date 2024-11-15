<?php
// ms3472
// 10/19/2024
// IT202-MC
// Phase 2
// MS3472@njit.edu
?>

<?php
// include('item.php');
// include('category.php');

if (isset($_SESSION['login'])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_POST['content'] === 'addportablepowerbankproduct') {
        
        $productID = $_POST['productID'];
        $productCode = htmlspecialchars($_POST['productCode']);
        $productName = htmlspecialchars($_POST['productName']);
        $description = htmlspecialchars($_POST['description']);
        $model = htmlspecialchars($_POST['model']);
        $categoryID = $_POST['categoryID'];
        $listPrice = $_POST['listPrice'];
        $wholesalePrice = $_POST['wholesalePrice'];

        if (trim($productID) === '') {
            echo "<h2>Missing parameter: Product ID.</h2>\n";
        } elseif (trim($productCode) === '') {
            echo "<h2>Missing parameter: Product Code.</h2>\n";
        } elseif (trim($productName) === '') {
            echo "<h2>Missing parameter: Product Name.</h2>\n";
        } elseif (trim($description) === '') {
            echo "<h2>Missing parameter: Description.</h2>\n";
        } elseif (trim($model) === '') {
            echo "<h2>Missing parameter: Model.</h2>\n";
        } elseif (trim($categoryID) === '') {
            echo "<h2>Missing parameter: Category ID.</h2>\n";
        } elseif (trim($listPrice) === '') {
            echo "<h2>Missing parameter: List Price.</h2>\n";
        } elseif (trim($wholesalePrice) === '') {
            echo "<h2>Missing parameter: Wholesale Price.</h2>\n";
        } elseif (!is_numeric($productID) || !is_numeric($categoryID) || !is_numeric($listPrice) || !is_numeric($wholesalePrice)) {
            echo "<h2>Sorry, please enter valid numeric values for Product ID, Category ID, List Price, and Wholesale Price.</h2>\n";
        } elseif (Item::findItem($productID) !== NULL) {
            echo "<h2>Product ID $productID is already in use. Please choose a different ID.</h2>\n";
        } elseif (Category::findCategory($categoryID) === NULL) {
            echo "<h2>Category ID $categoryID does not exist. Please enter a valid Category ID.</h2>\n";
        } else {
            
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
        }
    }
} else {
    echo "<h2>Please login first</h2>\n";
}
?>
