<?php
//ms3472
//10/19/2024
//IT202-MC
//Phase 2
//MS3472@njit.edu
require_once('database.php');
class Category
{
   public $categoryID;
   public $categoryCode;
   public $categoryName;
   public $shelfNum;  

   
   function __construct($categoryID, $categoryCode, $categoryName, $shelfNum)
   {
       $this->categoryID = $categoryID;
       $this->categoryCode = $categoryCode;
       $this->categoryName = $categoryName;
       $this->shelfNum = $shelfNum;  
   }

   function __toString()
   {
       $output = "<h2>Category Number: $this->categoryID</h2>\n" .
           "<h2>$this->categoryCode, $this->categoryName, Shelf: $this->shelfNum</h2>\n";
       return $output;
   }

   function saveCategory()
{
    $db = getDB();
    // Corrected column name to Portable_PowerBank_CategoryID
    $query = "INSERT INTO PortablePowerBanksCategories 
    (Portable_PowerBank_CategoryID, Portable_PowerBank_CategoryCode, Portable_PowerBank_CategoryName, Portable_PowerBank_ShelfNum, DateCreated)
    VALUES (?, ?, ?, ?, NOW())";

    $stmt = $db->prepare($query);
    $stmt->bind_param(
        "isss",  // 1 integer, 3 strings
        $this->categoryID,
        $this->categoryCode,
        $this->categoryName,
        $this->shelfNum
    );

    $result = $stmt->execute();
    $db->close();
    return $result;
}


static function getCategories()
{
    $db = getDB();
    $query = "SELECT * FROM PortablePowerBanksCategories";
    $result = $db->query($query);
    if (mysqli_num_rows($result) > 0) {
        $categories = array();
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $category = new Category(
                $row['Portable_PowerBank_CategoryID'],  
                $row['Portable_PowerBank_CategoryCode'], 
                $row['Portable_PowerBank_CategoryName'],  
                $row['Portable_PowerBank_ShelfNum'] 
            );
            array_push($categories, $category);
            unset($category);
        }
        $db->close();
        return $categories;
    } else {
        $db->close();
        return NULL;
    }
}
static function findCategory($categoryID)
{
    $db = getDB();
    $query = "SELECT Portable_PowerBank_CategoryID, Portable_PowerBank_CategoryCode, Portable_PowerBank_CategoryName, Portable_PowerBank_ShelfNum 
              FROM PortablePowerBanksCategories 
              WHERE Portable_PowerBank_CategoryID = ?";
    
    $stmt = $db->prepare($query);
    $stmt->bind_param("i", $categoryID);
    $stmt->execute();
    $result = $stmt->get_result();  
    $row = $result->fetch_array(MYSQLI_ASSOC);
    
    if ($row) {
        $category = new Category(
            $row['Portable_PowerBank_CategoryID'],
            $row['Portable_PowerBank_CategoryCode'],
            $row['Portable_PowerBank_CategoryName'],
            $row['Portable_PowerBank_ShelfNum']
        );
        $db->close();
        return $category;
    } else {
        $db->close();
        return NULL;
    }
}
function updateCategory()
{
    $db = getDB();
    $query = "UPDATE PortablePowerBanksCategories 
              SET Portable_PowerBank_CategoryCode = ?, 
                  Portable_PowerBank_CategoryName = ?, 
                  Portable_PowerBank_ShelfNum = ? 
              WHERE Portable_PowerBank_CategoryID = ?";

    $stmt = $db->prepare($query);

    $stmt->bind_param(
        "sssi",  
        $this->categoryCode,
        $this->categoryName,
        $this->shelfNum,
        $this->categoryID
    );
    
    $result = $stmt->execute();
    if ($result === false) {
        echo "Error updating category: " . $stmt->error;
    }

    $db->close();
    return $result;
}
function removeCategory()
{
    $db = getDB();
    $query = "DELETE FROM PortablePowerBanksCategories 
    WHERE Portable_PowerBank_CategoryID = ?";

    $stmt = $db->prepare($query);

    $stmt->bind_param("i", $this->categoryID);
    $result = $stmt->execute();
    if ($result === false) {
        echo "Error removing category: " . $stmt->error;
    }
    
    $db->close();
    return $result;
}
}

?>
