<table width="100%" cellpadding="3" style="background: linear-gradient(to right, #0072ff, #00c6ff);"> 
<?php
// ms3472
// 10/19/2024
// IT202-MC
// Phase 3
// MS3472@njit.edu
?>
    <?php
    if (!isset($_SESSION['login'])) {
        echo "<tr><td><h3>Please log in<br>to access navigation options</h3></td></tr>";
    } else {
        echo "<tr><td><h3>Welcome, {$_SESSION['login']}</h3></td></tr>";
    ?>

        <tr>
            <td style="text-align: left; vertical-align: middle;">
                <a href="index.php" style="text-decoration: none; color: black; display: flex; align-items: center;">
                    <img src="https://www.zupixels.com/content/images/2023/04/image.png" alt="Home" style="width: 40px; height: 40px; margin-right: 10px;"> 
                    <strong>Home</strong>
                </a>
            </td>
        </tr>
        <tr>
            <td style="text-align: left; vertical-align: middle;">
                <img src="https://atlas-content-cdn.pixelsquid.com/stock-images/cartoon-folder-BYJo5a3-600.jpg" alt="Categories" style="width: 40px; height: 40px; margin-right: 10px; display: inline-block;"> 
                <strong>Categories</strong>
            </td>
        </tr>
        <tr>
            <td style="text-align: left;">&nbsp;&nbsp;&nbsp;<a href="index.php?content=listportablepowerbankcategories"><strong>List Categories</strong></a></td>
        </tr>
        <tr>
            <td style="text-align: left;">&nbsp;&nbsp;&nbsp;<a href="index.php?content=newportablepowerbankcategory"><strong>Add New Category</strong></a></td>
        </tr>
        <tr>
            <td style="text-align: left; vertical-align: middle;">
                <img src="https://assets-v2.lottiefiles.com/a/56e55b42-1166-11ee-969d-f75c2107da36/JQSlhi6woz.gif" alt="Products" style="width: 40px; height: 40px; margin-right: 10px; display: inline-block;"> 
                <strong>Products</strong>
            </td>
        </tr>
        <tr>
            <td style="text-align: left;">&nbsp;&nbsp;&nbsp;<a href="index.php?content=listportablepowerbankproduct"><strong>List Products</strong></a></td>
        </tr>
        <tr>
            <td style="text-align: left;">&nbsp;&nbsp;&nbsp;<a href="index.php?content=newportablepowerbankproduct"><strong>Add New Product</strong></a></td>
        </tr>
        <tr>
            <td style="text-align: left;"><a href="index.php?content=logout" style="text-decoration: none; color: black;"><strong>Logout</strong></a></td>
        </tr>

        <tr><td><hr /></td></tr>
        <tr>
            <td style="text-align: left;">
                <form action="index.php" method="post">
                    <label>Search for Product:</label><br>
                    <input type="text" name="productID" size="14" />
                    <input type="submit" value="Find" />
                    <input type="hidden" name="content" value="updateportablepowerbankproduct">
                </form>
            </td>
        </tr>
        <tr>
            <td style="text-align: left;">
                <form action="index.php" method="post">
                    <label>Search for Category:</label><br>
                    <input type="text" name="categoryID" size="14" />
                    <input type="submit" value="Find" />
                    <input type="hidden" name="content" value="displayportablepowerbankcategory">
                </form>
            </td>
        </tr>
    <?php
    }
    ?>
</table>
