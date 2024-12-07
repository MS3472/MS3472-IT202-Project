<?php
// ms3472
// 10/19/2024
// IT202-MC
// Phase 3
// MS3472@njit.edu
require_once('portablepowerbankproduct.php'); 

?>
<script language="javascript">
   function listbox_dblclick() {
       document.items.updateitem.click();
   }

   function button_click(target) {
       var userConfirmed = true;
       if (target == 1) {
           userConfirmed = confirm("Are you sure you want to remove this item?");
       }
       if (userConfirmed) {
           if (target == 1) {
        
               items.action = "index.php?content=removeportablepowerbankproduct";
           }
           if (target == 2) {

               var selectedItem = document.items.itemID.value;
               if (selectedItem) {
                   items.action = "index.php?content=updateportablepowerbankproduct&productID=" + selectedItem;
               } else {
                   alert("Please select a product to update.");
               }
           }
       } else {
           alert("Action canceled.");
       }
   }
</script>

<h2>Select Item</h2>
<form name="items" method="post">
   <select ondblclick="listbox_dblclick()" name="itemID" size="20">
       <?php
       // Fetch all items
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
               $option = "ID: $productID | Code: $productCode | Name: $productName | List Price: $$listPrice | Wholesale Price: $$wholesalePrice";
               echo "<option value=\"$productID\">$option</option>\n";
           }
       }
       ?>
   </select>
   <br>
   <input type="submit" onClick="button_click(1)" name="deleteitem" value="Delete Item">
   <input type="submit" onClick="button_click(2)" name="updateitem" value="Update Item">
</form>
