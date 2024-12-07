<?php
// ms3472
// 10/19/2024
// IT202-MC
// Phase 2
// MS3472@njit.edu
require_once('database.php');

class Item
{
    public $productID;
    public $productCode;
    public $productName;
    public $description;
    public $model;
    public $categoryID;
    public $listPrice;
    public $wholesalePrice;

    function __construct($productID, $productCode, $productName, $description, $model, $categoryID, $listPrice, $wholesalePrice)
    {
        $this->productID = $productID;
        $this->productCode = $productCode;
        $this->productName = $productName;
        $this->description = $description;
        $this->model = $model;
        $this->categoryID = $categoryID;
        $this->listPrice = $listPrice;
        $this->wholesalePrice = $wholesalePrice;
    }

    function __toString()
    {
        $output = "<h2>Product ID: $this->productID</h2>" .
                  "<h2>Code: $this->productCode</h2>" .
                  "<h2>Name: $this->productName</h2>\n" .
                  "<h2>Description: $this->description</h2>\n" .
                  "<h2>Model: $this->model</h2>\n" .
                  "<h2>Category ID: $this->categoryID</h2>" .
                  "<h2>Retail Price: $$this->listPrice</h2>\n" .
                  "<h2>Wholesale Price: $$this->wholesalePrice</h2>\n";
        return $output;
    }

    function saveItem()
    {
        $db = getDB();

        // Check if productCode already exists
        $checkQuery = "SELECT COUNT(*) FROM PortablePowerBanksProducts WHERE Portable_PowerBank_ProductCode = ?";
        $checkStmt = $db->prepare($checkQuery);
        $checkStmt->bind_param("s", $this->productCode);
        $checkStmt->execute();
        $checkStmt->bind_result($count);
        $checkStmt->fetch();
        $checkStmt->close();

        if ($count > 0) {
            echo "<h2>Error: Product Code '{$this->productCode}' already exists. Please use a different code.</h2>\n";
            $db->close();
            return false;
        }

        $query = "INSERT INTO PortablePowerBanksProducts 
                  (Portable_PowerBank_ProductID, Portable_PowerBank_ProductCode, Portable_PowerBank_ProductName, 
                   Portable_PowerBank_description, Portable_PowerBank_model, 
                   Portable_PowerBank_CategoryID, Portable_PowerBank_listPrice, Portable_PowerBank_WholesalePrice, DateCreated)
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW())";

        $stmt = $db->prepare($query);

        $stmt->bind_param(
            "issssidd",
            $this->productID,
            $this->productCode,
            $this->productName,
            $this->description,
            $this->model,
            $this->categoryID,
            $this->listPrice,
            $this->wholesalePrice
        );

        $result = $stmt->execute();
        $db->close();
        return $result;
    }

    static function getItems()
    {
        $db = getDB();
        $query = "SELECT * FROM PortablePowerBanksProducts";
        $result = $db->query($query);

        if (mysqli_num_rows($result) > 0) {
            $items = array();
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $item = new Item(
                    $row['Portable_PowerBank_ProductID'],
                    $row['Portable_PowerBank_ProductCode'],
                    $row['Portable_PowerBank_ProductName'],
                    $row['Portable_PowerBank_description'],
                    $row['Portable_PowerBank_model'],
                    $row['Portable_PowerBank_CategoryID'],
                    $row['Portable_PowerBank_listPrice'],
                    $row['Portable_PowerBank_WholesalePrice']
                );
                array_push($items, $item);
            }
            $db->close();
            return $items;
        } else {
            $db->close();
            return NULL;
        }
    }

    static function findItem($productID)
    {
        $db = getDB();
        $query = "SELECT * FROM PortablePowerBanksProducts WHERE Portable_PowerBank_ProductID = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param("i", $productID);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if ($row) {
            $item = new Item(
                $row['Portable_PowerBank_ProductID'],
                $row['Portable_PowerBank_ProductCode'],
                $row['Portable_PowerBank_ProductName'],
                $row['Portable_PowerBank_description'],
                $row['Portable_PowerBank_model'],
                $row['Portable_PowerBank_CategoryID'],
                $row['Portable_PowerBank_listPrice'],
                $row['Portable_PowerBank_WholesalePrice']
            );
            $db->close();
            return $item;
        } else {
            $db->close();
            return NULL;
        }
    }

    static function getTotalItems()
    {
        $db = getDB();
        $query = "SELECT COUNT(Portable_PowerBank_ProductID) AS totalItems FROM PortablePowerBanksProducts";
        $result = $db->query($query);
        $row = $result->fetch_assoc();
        if ($row) {
            return $row['totalItems'];
        } else {
            return NULL;
        }
    }

    static function getTotalListPrice()
    {
        $db = getDB();
        $query = "SELECT SUM(Portable_PowerBank_listPrice) AS totalListPrice FROM PortablePowerBanksProducts";
        $result = $db->query($query);
        $row = $result->fetch_assoc();
        if ($row) {
            return $row['totalListPrice'];
        } else {
            return NULL;
        }
    }

    static function getTotalWholesalePrice()
    {
        $db = getDB();
        $query = "SELECT SUM(Portable_PowerBank_WholesalePrice) AS totalWholesalePrice FROM PortablePowerBanksProducts";
        $result = $db->query($query);
        $row = $result->fetch_assoc();
        if ($row) {
            return $row['totalWholesalePrice'];
        } else {
            return NULL;
        }
    }

    public function updateItem()
    {
        $db = getDB();

        $query = "UPDATE PortablePowerBanksProducts SET 
                      Portable_PowerBank_ProductCode = ?, 
                      Portable_PowerBank_ProductName = ?, 
                      Portable_PowerBank_description = ?, 
                      Portable_PowerBank_model = ?, 
                      Portable_PowerBank_CategoryID = ?, 
                      Portable_PowerBank_listPrice = ?, 
                      Portable_PowerBank_WholesalePrice = ? 
                  WHERE Portable_PowerBank_ProductID = ?";

        $stmt = $db->prepare($query);
        if (!$stmt) {
            echo "Error preparing statement: " . $db->error;
            return false;
        }

        $stmt->bind_param(
            "sssssdii",
            $this->productCode,
            $this->productName,
            $this->description,
            $this->model,
            $this->categoryID,
            $this->listPrice,
            $this->wholesalePrice,
            $this->productID
        );

        if (!$stmt->execute()) {
            echo "Error executing statement: " . $stmt->error;
            return false;
        }

        $db->close();
        return true;
    }

    public function removeItem()
    {
        $db = getDB();
        $query = "DELETE FROM PortablePowerBanksProducts WHERE Portable_PowerBank_ProductID = ?";
        $stmt = $db->prepare($query);
        $stmt->bind_param("i", $this->productID);

        return $stmt->execute();
    }

    public function updateModelOnly()
    {
        $db = getDB();

        $query = "UPDATE PortablePowerBanksProducts 
                  SET Portable_PowerBank_model = ? 
                  WHERE Portable_PowerBank_ProductID = ?";

        $stmt = $db->prepare($query);
        if (!$stmt) {
            echo "Error preparing statement: " . $db->error;
            return false;
        }

        $stmt->bind_param("si", $this->model, $this->productID);
        echo "Updating model to: " . $this->model . "<br>";

        if (!$stmt->execute()) {
            echo "Error executing statement: " . $stmt->error;
            return false;
        }

        $db->close();
        return true;
    }
}
?>
