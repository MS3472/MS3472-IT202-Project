<?php
//ms3472
//10/19/2024
//IT202-MC
//Phase 2
//MS3472@njit.edus
// include("item.php");
if (isset($_SESSION['login'])) {
   $itemID = $_POST['itemID'];
   $item = Item::findItem($itemID);
   $result = $item->removeItem();
   if ($result)
       echo "<h2>Item $itemID removed</h2>\n";
   else
       echo "<h2>Sorry, problem removing item $itemID</h2>\n";
} else {
   echo "<h2>Please login first</h2>\n";
}
?>
