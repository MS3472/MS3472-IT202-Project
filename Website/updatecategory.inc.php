<style>
   form[name="category"] {
       display: grid;
       grid-template-columns: 125px 1fr;
       gap: 10px 5px;
       align-items: left;
       max-width: 300px;
       margin: 0px;
   }
   form[name="category"] label {
       text-align: left;
       padding-right: 5px;
   }
   form[name="category"] input[type="text"] {
       width: 100%;
   }
   form[name="category"] input[type="submit"] {
       grid-column: 2;
       justify-self: start;
   }
</style>
<?php
$categoryID = $_POST['categoryID'] ?? null;

if (!$categoryID) {
}

$category = Category::findCategory($categoryID);

if ($category) {
    ?>
    <h2>Update Category <?php echo $categoryID; ?></h2><br>
    <form name="category" action="index.php" method="post">
        <label for="categoryCode">Category Code:</label>
        <input type="text" name="categoryCode" id="categoryCode" value="<?php echo $category->categoryCode; ?>">
        <label for="categoryName">Category Name:</label>
        <input type="text" name="categoryName" id="categoryName" value="<?php echo $category->categoryName; ?>">
        <label for="shelfNum">Shelf Number:</label>
        <input type="text" name="shelfNum" id="shelfNum" value="<?php echo $category->shelfNum; ?>">
        <input type="submit" name="answer" value="Update Category">
        <input type="submit" name="answer" value="Cancel">
        <input type="hidden" name="categoryID" value="<?php echo $categoryID; ?>">
        <input type="hidden" name="content" value="changeportablepowerbankcategory">
    </form>
    <?php
} else {
    echo "<h2>Sorry, category $categoryID not found</h2>";
}
?>